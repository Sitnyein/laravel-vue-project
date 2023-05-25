import axios from "axios"
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
            
            axios.post("http://localhost:8000/api/user/login",this.user)
              .then((response) => {
            
                 console.log(respose) 
              
            
              })
        }
    }
}