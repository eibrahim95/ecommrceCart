<template>
    <div class="container">
        <div class="row" v-if="products">
            <div v-for="item in products.data" class="col-12 col-md-4 col-lg-3">
                <div class="bg-secondary img-container position-relative d-flex">
                    <div class="img-overlay"></div>
                    <img :src="item.image" class="w-100">
                </div>
                <h4 class="w-100 text-center mt-1 item-header">{{item.name}}</h4>
                <p class="w-100 text-center item-description">{{item.description}}</p>
                <h5 class="w-100 text-left d-flex"><span class="d-flex m-auto">{{item.price}}$</span>
                    <span class="m-auto d-flex">|</span>
                    <span class="text-center d-flex m-auto">
                        <span v-if="inCart(item.id)">
                            <a href="#" @click="changeCart(item.id)"><i class="fa fa-plus"></i></a>
                            <input type="text" disabled readonly :value="amountInCart(item.id)" class="count-input">
                            <a href="#" @click="changeCart(item.id, '-')"><i class="fa fa-minus"></i></a>
                        </span>
                        <a href="#" @click="changeCart(item.id)" v-else><i class="fa fa-shopping-cart"></i></a>
                    </span>
                </h5>
            </div>
        </div>
        <div class="row mt-4">
            <nav aria-label="Page navigation" v-if="products && products.last_page !== 1">
                <ul class="pagination justify-content-center">
                    <li :class="'page-item '+(link.url ? ' ' : 'disabled ')+(link.active ? 'active' : '')" v-for="link in products.links">
                        <a class="page-link" href="#" aria-label="Previous" @click="paginate(link.url)">
                            <span aria-hidden="true" v-html="link.label"></span>
                        </a>
                    </li>
                </ul>
            </nav>
            </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            products: null,
            success: null
        }
    },
    mounted() {
        this.paginate('products');
    },
    methods: {
        paginate(url){
            const vue = this;
            vue.axios
                .get(url)
                .then(response => {
                    vue.products = response.data.products;
                });
        },
        changeCart(product_id, change_type='+'){
            const vue = this;
            vue.axios
                .post('change_cart', {'session_id':vue.$cookies.get('uuid'),'product_id': product_id, 'change_type': change_type})
                .then(response => {
                    vue.$cart = response.data.cart;
                });
        },
        inCart(product_id){
            if (!this.$cart.content.items) return false;
            const items = this.$cart.content.items.filter(row => row.product_id === product_id)
            return !!items.length;
        },
        amountInCart(product_id){
            const items = this.$cart.content.items.filter(row => row.product_id === product_id)
            return items[0].count;
        }
    }
}
</script>
