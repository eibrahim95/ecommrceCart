<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
            <div class="container">
                <router-link class="navbar-brand" :to="{name: 'home'}">eCommerce</router-link>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <router-link  :class="'nav-link ' + (currentRouteName === 'home' ? 'active' : '')" aria-current="page" :to="{name: 'home'}">Shop</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link :class="'nav-link ' + (currentRouteName === 'cart' ? 'active' : '')" :to="{name: 'cart'}">Cart <span class="badge bg-secondary" v-if="cart">{{cart.count}}</span></router-link>
                        </li>

                    </ul>
                   <ul class="navbar-nav mb-2 mb-lg-0">
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               Manage
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <li><router-link class="dropdown-item" :to="{name: 'products.index'}">Products</router-link></li>
                               <li><router-link class="dropdown-item" :to="{name: 'coupons.index'}">Coupons</router-link></li>
                           </ul>
                       </li>
                   </ul>
                </div>
            </div>
        </nav>
        <router-view></router-view>
    </div>
</template>
<script>
const default_layout = "default";


export default {
    beforeCreate() {
        const vue = this;
        const uuid = vue.$cookies.get('uuid');
        if (! uuid){
            vue.$cookies.set('uuid', vue.$uuid.v1());
        }
        vue.axios
            .get('cart?session_id='+vue.$cookies.get('uuid'))
            .then(response => {
                vue.$cart  = response.data.cart;
            })
    },
    computed: {
        currentRouteName() {
            return this.$route.name;
        }
    },
    watch: {
        $cart: function(val){
            this.cart = val;
        }
    },
    data() {
        return {
            cart: this.$cart
        }
    }
};
</script>
