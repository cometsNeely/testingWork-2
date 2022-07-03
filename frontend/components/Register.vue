<script>
import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import { mapState, mapActions } from 'vuex'

Vue.use(BootstrapVue)

export default {
  data () {
    return {
      form: {
        name: '',
        surnamename: '',
        password: '',
        confirm_password: ''
      },
      userId: null
    }
  },
  computed: {
    ...mapState([
      'humans'
    ])
  },
  mounted () {
    this.getAllHumansAction()
  },
  methods: {
    ...mapActions('apiHumans', {
      getAllHumansAction: 'getAllHumans',
      createHumanAction: 'createHuman'
    }),
    async register () {
      try {
        await this.createHumanAction({
          name: this.form.name,
          surname: this.form.surname,
          password: this.form.password
        })
      } finally {
        this.$bvModal.show('modal-window-success')
      }
    },
    confirmPassword () {
      if (this.form.password === this.form.confirm_password) {
        this.register()
      } else {
        this.$bvModal.show('modal-window-warning')
      }
    }
  }
}
</script>

<template>
  <div id="app">
    <div class="d-flex justify-content-center">
      <b-form style="margin-top: 100px;">
        <b-form-group
          id="input-group-1"
          label="Name:"
          label-for="input-1"
        >
          <b-form-input
            id="input-1"
            v-model="form.name"
            type="text"
            placeholder="Enter name"
            required
          />
        </b-form-group>

        <b-form-group
          id="input-group-2"
          label="Your Surnameame:"
          label-for="input-2"
        >
          <b-form-input
            id="input-2"
            v-model="form.surname"
            placeholder="Enter surname"
            required
          />
        </b-form-group>

        <b-form-group
          id="input-group-2"
          label="Your Password:"
          label-for="input-3"
        >
          <b-form-input
            id="input-3"
            v-model="form.password"
            type="password"
            placeholder="Enter password"
            required
          />
        </b-form-group>

        <b-form-group
          id="input-group-2"
          label="Confirm Your Password:"
          label-for="input-4"
        >
          <b-form-input
            id="input-4"
            v-model="form.confirm_password"
            type="password"
            placeholder="Enter password"
            required
          />
        </b-form-group>
        <b-button variant="primary" @click="confirmPassword">
          Register
        </b-button>
        <b-modal
          id="modal-window-warning"
          class="modal fade"
          title="Warning"
          hide-footer
          tabindex="-1"
          role="dialog"
          aria-hidden="true"
        >
          <p>WARNING: Please. try again! Wrong password.</p>
          <b-button
            size="sm"
            class="btn btn-secondary pl-3 pr-3 ml-2"
            data-dismiss="modal"
            aria-label="Close"
            @click="$bvModal.hide('modal-window-warning')"
          >
            Close
          </b-button>
        </b-modal>
        <b-modal
          id="modal-window-success"
          class="modal fade"
          title="Success"
          hide-footer
          tabindex="-1"
          role="dialog"
          aria-hidden="true"
        >
          <p>You're registered.</p>
          <b-button
            size="sm"
            class="btn btn-secondary pl-3 pr-3 ml-2"
            data-dismiss="modal"
            aria-label="Close"
            @click="$bvModal.hide('modal-window-success')"
          >
            Close
          </b-button>
        </b-modal>
      </b-form>
    </div>
  </div>
</template>
