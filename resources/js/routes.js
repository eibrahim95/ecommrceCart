import ListProducts from './components/products/ListProducts';
import CreateProduct from './components/products/CreateProduct';
import EditProduct from './components/products/EditProduct';
import ListCoupons from './components/coupons/ListCoupons';
import CreateCoupon from './components/coupons/CreateCoupon';
import EditCoupon from './components/coupons/EditCoupon';
import Cart from './components/cart/Cart';

import Home from './components/Home.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'products.index',
        path: '/products',
        component: ListProducts
    },
    {
        name: 'products.create',
        path: '/products/create',
        component: CreateProduct
    },
    {
        name: 'products.edit',
        path: '/products/edit/:id',
        component: EditProduct
    },
    {
        name: 'coupons.index',
        path: '/coupons',
        component: ListCoupons
    },
    {
        name: 'coupons.create',
        path: '/coupons/create',
        component: CreateCoupon
    },
    {
        name: 'coupons.edit',
        path: '/coupons/edit/:id',
        component: EditCoupon
    },
    {
        name: 'cart',
        path: '/cart',
        component: Cart
    }
];
