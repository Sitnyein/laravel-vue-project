import axios from "axios";
export default {
    name:"HomePage",
    data() {
        return {
            postlist : {},
        };
    },
    mounted () {
        axios.get("http://localhost:8000/api/allpost").then((response) => {
            this.postlist = response.data;
            console.log(this.postlist);
        });
    }
};