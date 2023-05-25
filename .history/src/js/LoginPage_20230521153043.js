export default {
    name:"LoginPage",
    data () {
        return {
            keydata: ''
        }
    },
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