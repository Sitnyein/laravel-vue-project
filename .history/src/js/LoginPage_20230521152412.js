export default {
    name:'LoginPage',
    data () {
        return {
            cd: ''
        }
    },
    methods: {
        homeshow() {
            this.$router.push({
              name:"home"
            })
          },
        login() {
            this.$router.push({
                name:'login'
            })
        }
    }
}