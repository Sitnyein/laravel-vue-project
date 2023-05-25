import axios from "axios";
export default {
    name:"HomePage",
    data() {
        return {
            postlist : {},
            categorylist: {},
            searchkey: ''
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
                 }) 
           },


       loadcategory() {
         axios.get("http://localhost:8000/api/allcategory").then((response) => {
            this.categorylist = response.data.category;
         })
       },

        //post search 
       search() {
        let search = {
            key : this.searchkey
        }
        axios.post("http://localhost:8000/api/searchpost",search)
          .then((response) => {
            this.postlist = response.data.searchdata
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

           },
          //category search
          categorysearch(searchkey) {
            console.log(searchkey);
          }
        
    },
    mounted () {
      this.getallpost();
      this.loadcategory();
        
    }
};