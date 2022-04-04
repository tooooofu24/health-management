/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.bootstrap = require('bootstrap/dist/js/bootstrap.bundle.js');
window.axios = require('axios');

// fontawsome
import "@fortawesome/fontawesome-free/js/fontawesome";
import "@fortawesome/fontawesome-free/js/brands";
import "@fortawesome/fontawesome-free/js/solid";
import "@fortawesome/fontawesome-free/js/regular";

import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';
import CommonCheckButtonComponent from './components/CommonCheckButtonComponent.vue';
import UserNavigationComponent from './components/UserNavigationComponent.vue';
import AdminNavigationComponent from './components/AdminNavigationComponent.vue';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

createApp({
    components: {
        ExampleComponent,
        CommonCheckButtonComponent,
        UserNavigationComponent,
        AdminNavigationComponent
    },
}).mount('#app')

// tooltipの初期化
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})
