<template>
    <div class="d-flex row justify-content-center">
            <div class="col-md-8 col-sm-4">
                        <h3 class="text-center">Register Agent</h3>
                <form @submit.prevent="createAgent">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="agent_data.name">
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="number" class="form-control" v-model="agent_data.phone">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" v-model="agent_data.address">
                    </div>
                    <button type="submit" class="btn btn-success btn-md form-control">Register</button>
                </form>
            </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                agent_data: {}
            }
        },
        methods: {
            createAgent() {
                this.axios
                    .post('http://localhost:8000/api/loan_agents', this.agent_data)
                    .then(response => (
                        this.$router.push({ name: 'Agent' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>
