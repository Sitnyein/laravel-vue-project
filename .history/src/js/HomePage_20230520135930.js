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
            this.postlist = response.data.post;
            console.log(this.postlist)}) 
           }
        
    },
    mounted () {
      this.getallpost();
        
    }
};