<template>
    <div>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-left">Create Coupon</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form @submit.prevent="addCoupon" class="form w-100">
                                <div class="mb-1">
                                    <label>Code</label>
                                    <input type="text" :class="'form-control '+(errors.code ?  'is-invalid' : '')" v-model="coupon.code">
                                    <div v-if="errors.code" class="invalid-feedback">
                                        <p v-for="error in errors.code">{{error}}</p>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label>Type</label>
                                    <select name="coupon_type" :class="'form-control '+(errors.coupon_type ?  'is-invalid' : '')" v-model="coupon.coupon_type">
                                        <option value="percentage">Percentage</option>
                                        <option value="fixed">Fixed</option>
                                    </select>
                                    <div v-if="errors.coupon_type" class="invalid-feedback">
                                        <p v-for="error in errors.coupon_type">{{error}}</p>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label>Value</label>
                                    <input type="number" step="0.1" :class="'form-control '+(errors.value ?  'is-invalid' : '')" v-model="coupon.value">
                                    <div v-if="errors.value" class="invalid-feedback">
                                        <p v-for="error in errors.value">{{error}}</p>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Create</button>
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
            coupon: {},
            errors: {}
        }
    },
    methods: {
        addCoupon() {
            const vue = this;
            this.axios
                .post('coupons', this.coupon)
                .then(function (response) {
                    vue.$session.flash.set('success', "Coupon added successfully");
                    vue.$router.push({name: 'coupons.index'})
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
