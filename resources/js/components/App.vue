<template>
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <router-link to="/" class="navbar-brand" href="#"> Laravel/Vue CRUD</router-link>
                <div class="collapse navbar-collapse">
                    <div class="navbar-nav">
                        <router-link exact-active-class="active" to="/" class="nav-item nav-link">Home</router-link>
                        <router-link exact-active-class="active" to="/category" class="nav-item nav-link">Category</router-link>
                        <router-link exact-active-class="active" to="/aboutus" class="nav-item nav-link">About Us</router-link>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container mt-5">
            <RouterView/>
        </div>
    </main>
</template>
 
<script>
    export default {}
</script>