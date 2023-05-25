import axios from "axios";



export default {
    name:"Newdetail",
    data () {
        return {
            postid: 0
        }
    },
    methods: {
        detailshow (id) {
            let post = {
                postid : id
            }
            axios.post("http://localhost:8000/api/post/detail",post)
              .then((response) => {
            
                for(let i=0;i<response.data.searchdata.length; i++) {
                    if(response.data.searchdata[i].image == null) {
                        response.data.searchdata[i].image = "http://localhost:8000/dimage/images.png";
                    }else
                    //+ mean under code is concutination
                   { response.data.searchdata[i].image = "http://localhost:8000/storage/" + response.data.searchdata[i].image;} 
                } 
                  this.postlist = response.data.searchdata
                 console.log(response.data)
            
              })
        }
    },
    mounted () {
        this.postid = this.$route.params.newid;
        this.detailshow(this.postid)
    }
}
