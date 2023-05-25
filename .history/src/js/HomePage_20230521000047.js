import axios from "axios";
export default {
    name:"HomePage",
    data() {
        return {
            postlist : {},
            categorylist: {}
        };
    },
    methods: {
      getallpost () {
        axios.get("http://localhost:8000/api/allpost").then((response) => {
            for(let i=0;i<response.data.post.length; i++) {
                if(response.data.post[i].image == null) {
                    response.data.post[i].image = "http://localhost:8000/dimage/images.png";
                }else
                //+ mean under code is concutination
               { response.data.post[i].image = "http://localhost:8000/storage/" + response.data.post[i].image;} 
            }

            this.postlist = response.data.post;
            console.log(this.postlist) }) 
           },
       loadcategory() {
         axios.get("http://localhost:8000/api/allpost").then((response) => {
            console.log(response.data.category)
         })
       }
        
    },
    mounted () {
      this.getallpost();
      this.loadcategory();
        
    }
};
//images
//http://localhost:8000/storage/6468e9c85238f1661533372007.jpg