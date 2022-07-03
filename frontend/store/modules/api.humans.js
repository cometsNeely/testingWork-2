import axios from 'axios'

export default {
  namespaced: true,

  actions: {
    async getAllHumans ({ commit }, data = {}) {
      const url = 'http://127.0.0.1:8000/api/humans'

      let resp = null
      resp = await axios({
        url
      })
      this.state.humans = resp.data
      console.log(this.state.humans)
    },
    async createHuman ({ commit }, data = {}) {
      let url = 'http://127.0.0.1:8000/api/createHuman'

      let resp = null
      resp = await axios({
        url,
        data,
        method: 'POST'
      })

      url = 'http://127.0.0.1:8000/api/humans'

      resp = await axios({
        url
      })
      this.state.humans = resp.data
      console.log(this.state.humans)
    }
  }
}
