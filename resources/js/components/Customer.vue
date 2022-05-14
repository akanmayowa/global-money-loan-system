

<template>
    <div class="container">

          <div class="col-md-2">
            <router-link  to="/CreateCustomer" class="btn btn-primary">Create Item</router-link>
          </div>
          <br />


    <div class="table-responsive mt-5">
               <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>s/n</th>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="customer in customers"  v-bind:key="customer.id">
                    <td>{{ customer.id }}</td>
                    <td>{{ customer.name }}, {{ customer.last_name }}</td>
                    <td>{{ customer.phone }}</td>
                    <td>{{ customer.address }}</td>
                    <td>
                            <div class="btn-group" role="group">
                            <router-link :to="{name: 'editcustomer', params: { id: customer.id }}"
                                class="btn btn-success btn-sm mr-2">Edit</router-link>
                            <button class="btn btn-danger btn-sm" @click=" deleteCustomer(customer.id)">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
</template>

<script>
export default {
        data(){
            return{
                customers: []
            }
        },
        method:{
            deleteCustomer(id){
                this.axios
                    .delete(`http://localhost:8000/api/customers/${id}`)
                    .then(response => (
                        this.customers.splice(this.customers.indexOf(id), 1)
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        },

        created(){
                    this.axios
                    .get('http://localhost:8000/api/customers')
                    .then(response => (
                        this.customers = response.data
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
        }
}
</script>
<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity .5s
    }
    .fade-enter, .fade-leave-active {
      opacity: 0
    }
</style>

