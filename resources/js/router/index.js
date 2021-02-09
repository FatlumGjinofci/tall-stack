import Vue from 'vue';
import VueRouter from 'vue-router';
import Login from '../components/auth/Login'
import Register from '../components/auth/Register'
Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',
    routes: [
        { path: '/login', name: 'login', component: Login, meta: { requiresGuest: true } },
        { path: '/register', name: 'register', component: Register, meta: { requiresGuest: true } },
    ]
});