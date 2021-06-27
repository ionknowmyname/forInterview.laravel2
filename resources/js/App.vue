<template>
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <router-link to="/" class="navbar-brand" href="#"
                    >Testing this</router-link
                >
                <div class="collapse navbar-collapse">
                    <div class="navbar-nav">
                        <router-link
                            exact-active-class="active"
                            to="/createclient"
                            class="nav-item nav-link"
                            >Create Client</router-link
                        >
                        <router-link
                            exact-active-class="active"
                            to="/allclient"
                            class="nav-item nav-link"
                            >All Clients</router-link
                        >
                    </div>
                </div>
            </div>
        </nav>
        <div class="container mt-5">
            <router-view></router-view>
        </div>
    </main>
</template>

<script>
export default {};
</script>
