/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');
 import * as Vue from 'vue'; // if this is not work add this => 


 import axios from 'axios';
 import VueAxios from 'vue-axios';
import * as VueRouter from 'vue-router';



 import App from './app.vue';
 import { createRouter, createWebHistory } from 'vue-router';

import CalendarComponent from './components/CalendarComponent.vue';

export const routes = [
    {
        path: '/dashboard',
        component: CalendarComponent,
        name: "CalendarComponent"
    }
];
const router = VueRouter.createRouter({
  history: VueRouter.createWebHistory(),
  routes,
});

 Vue.createApp(App).use(router,axios,VueAxios).mount('#app');

