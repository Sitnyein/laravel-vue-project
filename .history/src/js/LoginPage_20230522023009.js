import axios from "axios"
import { mapGetters } from "vuex"
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
    computed: {
        ...mapGetters(["getToken","getuser"]),
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
            if(response.data.token == null) {
                console.log("there is no user");
            }else{
                this.$store.dispatch("setToken",response.data.token);
                this.$store.dispatch("setuser",response.data.user);
                
            }
                 })
        },
        check() {
            console.log(this.getToken);
        } 
    }
}