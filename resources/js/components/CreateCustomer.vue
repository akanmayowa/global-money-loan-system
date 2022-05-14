<template>
 <div class="d-flex row justify-content-center">
            <div class="col-md-8 col-sm-4">
                        <h4 class="text-center">New Customer</h4>
                <form @submit.prevent="createCustomer">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" v-model="customer.username" >
                    </div>

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="customer.name" >
                    </div>

                    <div class="form-group">
                        <label>Last name</label>
                        <input type="text" class="form-control" v-model="customer.last_name">
                    </div>


                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" v-model="customer.email">
                    </div>


                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="number" class="form-control" v-model="customer.phone_number" >
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" v-model="customer.address">
                    </div>

                    <button type="submit" class="btn btn-success btn-lg form-control">Register Customer</button>
                </form>
            </div>
    </div>
</template>

<script>
export default {
    data() {
            return {
                customer: {}
            }
        },
    methods:{
        createCustomer(){
            this.axios
                .post('http://localhost:8000/api/customers', this.customer)
                .then(response => (
                    this.$router.push('/customers')
                    //  this.$router.push({ name: 'Customer' })
                ))
                .catch(err => console.log(err))
                .finally(() => this.loading = false)
        }
    }
}

</script>
