import Vue from 'vue'
import App from './components/App.vue';
import router from './router/index'
import store from './store/index'
import axios from './utils/apiService.js'

const app = new Vue({
    el: '#app',
    store,
    router,
    axios,
    components: {
        App
    },
});
