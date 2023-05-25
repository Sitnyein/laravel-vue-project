import { createStore } from 'vuex'

export default createStore({
  state: {
    user:{},
    token:''
  },
  getters: {
    getToken: state =>state.token,
    getuser: state => state.user
  },
  mutations: {
  },
  actions: {
    setToken: ({state},value) => state.token = value,
    setuser : ({state},value) => state.user = value,
  },
  modules: {
  }
})
