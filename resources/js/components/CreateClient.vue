<template>
    <div>
        <h3 class="text-center">Create Client</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="submitData">
                    <div class="form-group">
                        <label>First Name</label>
                        <input
                            type="text"
                            class="form-control"
                            v-model="client.firstname"
                        />
                    </div>
                    <div class="form-group">
                        <label>Last name</label>
                        <input
                            type="text"
                            class="form-control"
                            v-model="client.lastname"
                        />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input
                            type="text"
                            class="form-control"
                            v-model="client.email"
                        />
                    </div>
                    <div class="form-group">
                        <label>Date Profiled</label>
                        <input
                            type="text"
                            class="form-control"
                            v-model="client.dateprofiled"
                        />
                    </div>
                    <div class="form-group">
                        <label>Primary Legal Counsel</label>
                        <input
                            type="text"
                            class="form-control"
                            v-model="client.primarylegal"
                        />
                    </div>
                    <div class="form-group">
                        <label>DOB</label>
                        <input
                            type="text"
                            class="form-control"
                            v-model="client.DOB"
                        />
                    </div>
                    <div class="form-group">
                        <label>Case Details</label>
                        <input
                            type="text"
                            class="form-control"
                            v-model="client.casedetails"
                        />
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Create
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            client: {}
        };
    },
    methods: {
        submitData() {
            axios
                .post("http://localhost:8000/api/create", this.client)
                .then(response => {
                    console.log("res from api:", response.data);
                    this.$router.push({ name: "allclient" });
                })
                .catch(err => console.log(err));
        }
    }
};
</script>
