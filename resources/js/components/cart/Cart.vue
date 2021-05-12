<template>
    <div class="container">
        <div class="row">
            <div class="col-12" >
                <h2>Cart <span v-if="cart">({{cart.count}})</span></h2>
                <br>
                <br>
            </div>
            <div class="col-12 col-md-6 col-lg-8" v-if="cart">
                <div class="row overflow-hidden" v-for="item in cart.content.items">
                    <div class="col-4">
                        <div class="bg-secondary small-img-container position-relative text-center">
                            <div class="img-overlay"></div>
                            <img :src="item.product.image" class="h-100">
                        </div>
                    </div>
                    <div class="col-8">
                        <h4 class="w-100 text-center mt-1">{{item.product.name}}</h4>
                        <p class="w-100 text-center text-muted">{{item.product.description}}</p>
                        <h5 class="w-100 text-left d-flex"><span class="d-flex m-auto">{{item.product.price}}$</span>
                            <span class="m-auto d-flex">|</span>
                            <span class="text-center d-flex m-auto">
                                <span v-if="inCart(item.product.id)">
                                    <a href="javascript:;" @click="changeCart(item.product.id)"><i class="fa fa-plus"></i></a>
                                    <input type="text" disabled readonly :value="amountInCart(item.product.id)" class="count-input">
                                    <a href="javascript:;" @click="changeCart(item.product.id, '-')"><i class="fa fa-minus"></i></a>
                                </span>
                                <a href="javascript:;" @click="changeCart(item.product.id)" v-else><i class="fa fa-shopping-cart"></i></a>
                            </span>
                        </h5>
                    </div>
                    <div class="col-12 border-top mt-2">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-8" v-else>
                No Items In Cart <router-link  class="nav-link active" aria-current="page" :to="{name: 'home'}">Go Shopping</router-link>
            </div>
            <div class="col-12 col-md-6 col-lg-4 border-left">
                <h2>Checkout</h2>
                <table class="table table-bordered" v-if="cart">
                    <thead>
                    <tr>
                        <th>Total</th>
                        <th >{{ cart.content.total }}$</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Discount</td>
                        <td>{{cart.content.discount}} $</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Grand Total</th>
                        <th>{{cart.content.grand_total}} $</th>
                    </tr>
                    </tfoot>
                </table>
                <div class="border text-center p-2" v-if="cart">
                    <p class="text-left border-bottom p-1 border-right" v-for="discount in cart.content.discounts">{{discount.coupon.code}}
                    <span class="float-right">
                        <a href="javascript:;" @click="removeCoupon(discount.id)"><i class="fa fa-times"></i></a>
                    </span>
                    </p>
                    <input type="text" v-model="coupon" :class="'form-control mb-2 '+(errors.coupon ?  'is-invalid' : '')" placeholder="Coupon here">
                    <div v-if="errors.coupon" class="invalid-feedback">
                        <p v-for="error in errors.coupon">{{error}}</p>
                    </div>
                    <button class="btn btn-success w-100" @click="applyCoupon">Add Coupon</button>
                </div>
                <div class="w-100 text-center mt-3">
                    <button class="btn btn-primary btn-lg" @click="notDone">Checkout Now <i class="fa fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    mounted(){
    },
    data() {
        return {
            cart: this.$cart,
            coupon: null,
            errors: {}
        }
    },
    watch: {
        $cart: function(val){
            this.cart = val;
        }
    },
    methods: {
        changeCart(product_id, change_type='+'){
            const vue = this;
            if (change_type === '-' && this.amountInCart(product_id) == 1){
                vue.$swal({
                    title: "Are you sure?",
                    text: "This will remove the product from the cart!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            this.applyChange(product_id, change_type);
                        }
                    });
            }
            else {
                this.applyChange(product_id, change_type);
            }
        },
        applyChange(product_id, change_type='+'){
            const vue = this;
            vue.axios
                .post('change_cart', {
                    'session_id': vue.$cookies.get('uuid'),
                    'product_id': product_id,
                    'change_type': change_type
                })
                .then(response => {
                    if (response.data.status === 1) {
                        vue.$cart = response.data.cart;
                    }
                    else {
                        if (response.data.errors.reasons){
                            vue.$swal({
                                title: "Cannot do",
                                text: response.data.errors.reasons.join('<br>'),
                                icon: "error",
                                dangerMode: true,
                            });
                        }
                    }
                });
        },
        inCart(product_id){
            const items = this.$cart.content.items.filter(row => row.product_id === product_id)
            return !!items.length;
        },
        amountInCart(product_id){
            const items = this.$cart.content.items.filter(row => row.product_id === product_id)
            return items[0].count;
        },
        applyCoupon(){
            const vue = this;
            if(!vue.coupon){
                vue.errors = {'coupon': ['PLease  enter the coupon here first']};
                return false;
            }
            vue.axios
                .post('apply_coupon', {
                    'session_id': vue.$cookies.get('uuid'),
                    'code': vue.coupon,
                })
                .then(response => {
                    if (response.data.status == 1) {
                        vue.$cart = response.data.cart;
                        vue.errors = {};
                    }
                    else {
                        vue.errors = response.data.errors;
                    }
                });
        },
        removeCoupon(coupon_id){
            const vue  = this;
            vue.axios
                .post('remove_coupon/'+coupon_id, {
                    'session_id': vue.$cookies.get('uuid'),
                })
                .then(response => {
                    if (response.data.status == 1) {
                        vue.$cart = response.data.cart;
                        vue.errors = {};
                    }
                    else {
                        vue.errors = response.data.errors;
                    }
                });
        },
        notDone(){
            this.$swal({
                title: "Not Done?",
                text: "You've reached the end of this demonstration!",
                icon: "warning",
            });
        }
    }
}
</script>
