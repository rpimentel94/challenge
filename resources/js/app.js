/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
        newUrl: {'url': ''},
        hasError: true,
        urls: [],
        fullUrl: null,
        shortened: null
    },
    methods: {
        createUrl: function createUrl() {
            var input = this.newUrl;
            var _this = this;
            if(input['url'] == '') {
                this.hasError = false;
                alert("URL field is required");
            }
            else {
                this.hasError= true;
                axios.post('/api/storeUrl', input).then(function(response){
                    this.shortened = "/sh/" + response.data.result.id;
                    fullUrl = document.getElementById("final");
                    fullUrl.innerHTML = "Shortened URL: <a href='"+shortened+"' target='_blank'>"+shortened+"</a>"; 
                }).catch(error=>{
                    console.log("Insert: "+error);
                });
            }
        }
    }
});
