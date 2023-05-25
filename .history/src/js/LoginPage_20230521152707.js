export default {
    name:'LoginPage',
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