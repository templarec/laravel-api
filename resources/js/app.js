require('./bootstrap');
var app = new Vue ({
    el: '#root',
    data: {
    cats: {}
    },
    created () {
      axios.get('http://localhost:8000/api/cats')
          .then( (risposta) => {
              this.cats = risposta.data.data
          })
    },
    computed: {

    },
    methods: {

    }
});
