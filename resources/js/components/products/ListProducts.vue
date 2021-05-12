<template>
    <div>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-left">Products List
                        <router-link type="button" class="btn btn-success float-end" :to="{name: 'products.create'}">Add New</router-link>
                    </h2>
                </div>
                <div class="card-body">
                    <label v-if="success" class="alert alert-success w-100">{{success}}</label>
                    <table class="table" v-if="products">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="product in products.data" :key="product.id">
                            <td>{{ product.id }}</td>
                            <td>{{ product.name }}</td>
                            <td>{{ product.description }}</td>
                            <td><img height="100" :src="product.image"></td>
                            <td>{{ product.price }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <router-link :to="{name: 'products.edit', params: { id: product.id }}" class="btn btn-primary">Edit</router-link>
                                    <button class="btn btn-danger ml-1" @click="deleteProduct(product.id)">Delete</button>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation" v-if="products && products.last_page !== 1">
                        <ul class="pagination justify-content-center">
                            <li :class="'page-item '+(link.url ? ' ' : 'disabled ')+(link.active ? 'active' : '')" v-for="link in products.links">
                                <a class="page-link" href="javascript:;" aria-label="Previous" @click="paginate(link.url)">
                                    <span aria-hidden="true" v-html="link.label"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
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
        this.success = this.$session.flash.get('success');
    },
    methods: {
        deleteProduct(id) {
            const vue = this;
            vue.$swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this product!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        vue.axios
                            .delete(`products/${id}`)
                            .then(response => {
                                vue.products = response.data.products;
                                vue.$swal("Product Deleted Successfully!", {
                                    icon: "success",
                                });
                            });
                    }
                });
        },
        paginate(url){
            const vue = this;
            this.axios
                .get(url)
                .then(response => {
                    vue.products = response.data.products;
                });
        }
    }
}
</script>
