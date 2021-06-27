<template>
    <div>
        <h1>See Post</h1>

        <div class="card" style="width: 270px;margin: 5px">
            <img class="card-img-top" src="{{}}" alt="Card image cap" />
            <div class="card-block">
                ID:
                <h4>{{ $client.id }}</h4>
                First name:
                <h4 class="card-text">{{ $client.firstname }}</h4>
                Last name:
                <h4 class="card-text">{{ $client.lastname }}</h4>
                Email:
                <h4 class="card-text">{{ $client.email }}</h4>
                Date Profiled:
                <h4 class="card-text">{{ $client.dateprofiled }}</h4>
                Primary Legal Counsel:
                <h4 class="card-text">{{ $client.primarylegal }}</h4>
                DOB:
                <h4 class="card-text">{{ $client.DOB }}</h4>
                Case Details:
                <h4 class="card-text">{{ $client.casedetails }}</h4>
                <a href="/allclient" class="btn btn-primary"
                    >Go back to all list</a
                >
            </div>
        </div>

        <button class="btn btn-primary">Update</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            post: {}
        };
    },
    created() {
        let uri = "http://localhost:8000/api/clients/${this.$route.params.id}";
        this.axios.get(uri).then(response => {
            this.clients = response.data;
        });
    },
    methods: {
        updatePost() {
            let uri = `http://vuelaravelcrud.test/api/post/update/${this.$route.params.id}`;
            this.axios.post(uri, this.post).then(response => {
                this.$router.push({ name: "posts" });
            });
        }
    }
};
</script>
