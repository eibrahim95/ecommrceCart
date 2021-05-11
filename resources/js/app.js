/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import App from './App.vue';
import { routes } from './routes';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import VueSession from 'vue-session'
import axios from 'axios';
import { config } from './config';
import VueSwal from 'vue-swal'
import UUID from "vue-uuid";

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.use(VueRouter);
Vue.use(VueAxios, axios);
Vue.use(VueSession);
Vue.use(VueSwal);
Vue.use(require('vue-cookies'))
Vue.use(UUID);

// Vue.prototype.$cart = {data: null};

const cart = Vue.observable({ cart: null })

Object.defineProperty(Vue.prototype, '$cart', {
    get () {
        return cart.cart
    },

    set (value) {
        cart.cart = value
    }
})

axios.defaults.baseURL = config.VUE_APP_URL + '/api';
const router = new VueRouter({
    mode: 'history',
    routes: routes
});
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App),
});
