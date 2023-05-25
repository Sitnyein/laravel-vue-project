<template>
    <div>
         <div class="d-flex justify-content-center py-3">
            <p class="btn btn-danger text-white mr-4" v-on:click="home">Home</p>
            <p class="btn bg-dark text-white" @click="login()">login</p>
          </div>
        <h1>login Page</h1>
    </div>
</template>

<script>
    export default {
        name:"LoginPage",
        methods: {
           home() {
            this.$router.push({
                name:'homepage'
            })
           },
            login() {
                this.$router.push({
                    name:'login'
                })
            }
        }
    }
</script>

