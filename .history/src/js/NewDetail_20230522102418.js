import axios from "axios";
import { mapGetters } from "vuex";


export default {
    name:"NewDetail",
    data () {
        return {
            id: '',
            posts:{}
        }
    },
    computed: {
        ...mapGetters(["getToken","getuser"]),
    },
    methods: {
        detailshow (id) {
            let post = {
                postid : id,
                
            }
            console.log(post);
            axios.post("http://localhost:8000/api/post/detail",post)
              .then((response) => {
            
                 
                    if(response.data.datapost.image == null) {
                        response.data.datapost.image = "http://localhost:8000/dimage/images.png";
                    }else
                    //+ mean under code is concutination
                   { response.data.datapost.image = "http://localhost:8000/storage/" + response.data.datapost.image;} 
                    console.log(response.data.datapost)
                this.posts = response.data.datapost 
              
            
              })
        },
        back() {
            history.back();
        },
        homeshow() {
            this.$router.push({
              name:"home"
            })
          },
        login() {
            this.$router.push({
                name:'login'
            })
        },

    },
    mounted () {
        let data = {
            user_id : this.getuser.id,
            post_id: this.$route.params.newid
        }
        axios.post("http://localhost:8000/api/action/log",data)

        this.id = this.$route.params.newid;
        this.detailshow(this.id);
    //    console.log('edward',this.id)
    }
}