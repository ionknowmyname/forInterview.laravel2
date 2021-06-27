<template>
    <div>
        <h1>All Clients</h1>
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <router-link
                    :to="{ name: 'createclient' }"
                    class="btn btn-primary"
                    >Create Client</router-link
                >
            </div>
        </div>
        <br />

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Date Profiled</th>
                    <th>Primary Legal Counsel</th>
                    <th>DOB</th>
                    <th>Case Details</th>
                    <th>Profile Picture</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="client in clients" :key="client.id">
                    <td>{{ client.id }}</td>
                    <td>{{ client.firstname }}</td>
                    <td>{{ client.lastname }}</td>
                    <td>{{ client.email }}</td>
                    <td>{{ client.dateprofiled }}</td>
                    <td>{{ client.primarylegal }}</td>
                    <td>{{ client.DOB }}</td>
                    <td>{{ client.casedetails }}</td>
                    <td>{{ client.filename }}</td>
                    <td>
                        <router-link
                            :to="{
                                name: 'singleclient',
                                params: { id: client.id }
                            }"
                            class="btn btn-primary"
                            >Select</router-link
                        >
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
            clients: []
        };
    },
    created() {
        let uri = "http://localhost:8000/api/clients";
        this.axios.get(uri).then(response => {
            this.clients = response.data;
        });
    },
    methods: {}
};
</script>
