require('./bootstrap');
var app = new Vue ({
    el: '#root',
    data: {
        token: 'FKeXlz4K34vz2L2Et9fNhc43y8pIGkWcmIhKFnSRrjeDNxXutvGr1XvkmnYGg0fc',
    cats: {},
    error: ''
    },
    created () {
      axios.get('http://localhost:8000/api/cats', {
          params: {
              api_token: this.token
          }
      })
          .then( (risposta) => {
              if(risposta.data.success) {
                  this.cats = risposta.data.data
              } else {
                this.error = risposta.data.data
              }

          })
    },
    computed: {

    },
    methods: {

    }
});
