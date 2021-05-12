<template>
    <div>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-left">Coupons List
                        <router-link type="button" class="btn btn-success float-end" :to="{name: 'coupons.create'}">Add New</router-link>
                    </h2>
                </div>
                <div class="card-body">
                    <label v-if="success" class="alert alert-success w-100">{{success}}</label>
                    <table class="table" v-if="coupons">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Code</th>
                            <th>Type</th>
                            <th>Value</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="coupon in coupons.data" :key="coupon.id">
                            <td>{{ coupon.id }}</td>
                            <td>{{ coupon.code }}</td>
                            <td>{{ coupon.coupon_type | capitalize }}</td>
                            <td>{{ coupon.value }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <router-link :to="{name: 'coupons.edit', params: { id: coupon.id }}" class="btn btn-primary">Edit</router-link>
                                    <button class="btn btn-danger ml-1" @click="deleteCoupon(coupon.id)">Delete</button>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation" v-if="coupons && coupons.last_page !== 1">
                        <ul class="pagination justify-content-center">
                            <li :class="'page-item '+(link.url ? ' ' : 'disabled ')+(link.active ? 'active' : '')" v-for="link in coupons.links">
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
            coupons: null,
            success: null
        }
    },
    mounted() {
        this.paginate('coupons');
        this.success = this.$session.flash.get('success');
    },
    filters: {
        capitalize: function (value) {
            if (!value) return ''
            value = value.toString()
            return value.charAt(0).toUpperCase() + value.slice(1)
        }
    },
    methods: {
        deleteCoupon(id) {
            const vue = this;
            vue.$swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this coupon!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        vue.axios
                            .delete(`coupons/${id}`)
                            .then(response => {
                                vue.coupons = response.data.coupons;
                                vue.$swal("Coupon Deleted Successfully!", {
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
                    vue.coupons = response.data.coupons;
                });
        }
    }
}
</script>
