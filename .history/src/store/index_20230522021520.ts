import { createStore } from 'vuex'

export default createStore({
  state: {
    user:{},
    token:''
  },
  getters: {
    getToken: state =>state.token
  },
  mutations: {
  },
  actions: {
    setToken: ({state},value) => state.token = value
  },
  modules: {
  }
})
