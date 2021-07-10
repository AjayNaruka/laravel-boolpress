console.log('GUEST');
require('./bootstrap');

window.Vue = require('vue');

import router from './routes'

import App from './App.vue'

const app = new Vue({
    el: '#app',
    render : h=>h(App),
    router
});

