<template>
    <div>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-left">Create Product</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form @submit.prevent="editProduct" class="form w-100">
                                <div class="mb-1">
                                    <label>Name</label>
                                    <input type="text" :class="'form-control '+(errors.name ?  'is-invalid' : '')" v-model="product.name">
                                    <div v-if="errors.name" class="invalid-feedback">
                                        <p v-for="error in errors.name">{{error}}</p>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label>Description</label>
                                    <input type="text" :class="'form-control '+(errors.description ?  'is-invalid' : '')" v-model="product.description">
                                    <div v-if="errors.description" class="invalid-feedback">
                                        <p v-for="error in errors.description">{{error}}</p>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label>Image Link</label>
                                    <input type="url" :class="'form-control '+(errors.image ?  'is-invalid' : '')" v-model="product.image">
                                    <div v-if="errors.image" class="invalid-feedback">
                                        <p v-for="error in errors.image">{{error}}</p>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label>Price</label>
                                    <input type="number" step="0.1" :class="'form-control '+(errors.price ?  'is-invalid' : '')" v-model="product.price">
                                    <div v-if="errors.price" class="invalid-feedback">
                                        <p v-for="error in errors.price">{{error}}</p>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            product: {},
            errors: {}
        }
    },
    mounted(){
        const vue = this;
        this.axios
            .get('products/'+vue.$route.params.id)
            .then(response => {
                vue.product = response.data.product;
            });
    },
    methods: {
        editProduct() {
            const vue = this;
            this.axios
                .put('products/'+vue.product.id, this.product)
                .then(function (response) {
                    vue.$session.flash.set('success', "Product edited successfully");
                    vue.$router.push({name: 'products.index'})
                })
                .catch(function(err){
                    const status = err.response.status;
                    if(status === 422){
                        vue.errors = err.response.data.errors;
                    }
                })
                .finally(() => this.loading = false)
        }
    }
}
</script>
