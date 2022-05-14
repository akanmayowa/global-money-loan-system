<template>
    <div class="table-responsive mt-5">
        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody hidden><tr><td></td><td></td><td></td><td></td></tr></tbody>
            <tbody>
                <tr v-for="agent in agents" :key="agent.id">
                    <td>{{ agent.name }} </td>
                    <td>{{ agent.phone}}</td>
                    <td>{{ agent.address}} </td>
                    <td>
                        <div class="btn-group" role="group">
                            <router-link :to="{name: 'EditAgent', params: { id: agent.id }}"
                                class="btn btn-success btn-sm mr-2">Edit</router-link>
                            <button class="btn btn-danger btn-sm" @click="deleteAgent(agent.id)">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>

        </table>
    </div>
</template>


<script>
    export default {
        data() {
            return {
                agents: []
            }
        },

        created() {
            this.axios.get('http://localhost:8000/api/loan_agents/')
                .then(response => (
                    this.agents = response.data
                ))
        },

        methods: {
            deleteAgent(id) {
                this.axios.delete(`http://localhost:8000/api/loan_agents/${id}`)
                    .then(response => {
                        let mapping_agent = this.agents.map(value => value.id).indexOf(id);
                        this.agents.splice(mapping_agent, 1)
                    })
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false);
            }
        }

    }

</script>
