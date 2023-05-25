export default {
    name:"LoginPage",
    data () {
        return {
            user:{
               email:'',
               password:'',
            }
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
        },
        userlogin() {
            console.log(this.user);
        }
    }
}