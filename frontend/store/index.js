import Vue from 'vue'
import Vuex from 'vuex'
import { BootstrapVue, BootstrapVueIcons } from 'bootstrap-vue'
import apiHumans from './modules/api.humans.js'

Vue.use(BootstrapVue)
Vue.use(BootstrapVueIcons)

Vue.use(Vuex)

const getInitialState = () => {
  return {
    humans: []
  }
}

const store = () => new Vuex.Store({
  state: getInitialState(),
  mutations: {},
  getters: {},
  actions: {},
  modules: {
    apiHumans
  }
})

export default store
