
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// Vue
import Vue from 'vue'
// Vue-Router
import router from './router'

// Main app
const app = new Vue({
    el: '#app',
    router,
});