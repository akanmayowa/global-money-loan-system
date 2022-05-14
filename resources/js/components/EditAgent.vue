<template>
    <div>
        <h3 class="text-center">Edit Agent</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateAgent">
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
                    <button type="submit" class="btn btn-primary btn-md">Update</button>
                </form>
            </div>
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

        created(){
            this.axios.get(`http://localhost:8000/api/loan_agents/${this.$route.params.id}`)
            .then(response => (
                this.agent_data = response.data
            ))
        },
        
        methods: {
            updateAgent() {
                this.axios
                .patch(`http://localhost:8000/api/loan_agents/${this.$route.params.id}`, this.agent_data)
                    .then(response => (
                        this.$router.push({ name: 'Agent' })
                    ))
                    .catch(err => console.log(err))
                     .finally(() => this.loading = false)
            }
        }
    }
</script>
