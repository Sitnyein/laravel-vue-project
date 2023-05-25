export default {
    name:'LoginPage',
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