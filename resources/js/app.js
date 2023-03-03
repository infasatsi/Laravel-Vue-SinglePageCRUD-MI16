require('./bootstrap');

import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';

import App from  "./components/App.vue"

import {routes} from './routes';

const router = createRouter({
    history: createWebHistory(),
    routes: routes
});

createApp(App).use(router).use(VueAxios, axios).mount("#app");

