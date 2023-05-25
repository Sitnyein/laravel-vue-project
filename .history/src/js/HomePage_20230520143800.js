import axios from "axios";
export default {
    name:"HomePage",
    data() {
        return {
            postlist : {},
        };
    },
    methods: {
      getallpost () {
        axios.get("http://localhost:8000/api/allpost").then((response) => {
            for(let i=0;i<response.data.length; i++) {
                response.data.post[i].image = "http://localhost:8000/storage/6468e9c85238f1661533372007.jpg"
            }

            this.postlist = response.data.post;
            console.log(this.postlist) }) 
           }
        
    },
    mounted () {
      this.getallpost();
        
    }
};
//images
//http://localhost:8000/storage/6468e9c85238f1661533372007.jpg