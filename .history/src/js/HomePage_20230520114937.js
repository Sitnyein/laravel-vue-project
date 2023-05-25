import axios from "axios";
export default {
    name:'HomePage',
    data() {
        return {
            message : "this is code lab",
        };
    },
    mounted () {
        axios.get("http://localhost:8000/api/allpost").then((response) => {
            console.log(response)
        });
    }
};