require('./bootstrap');

import Vue from 'vue';

import Laraform from 'laraform';
import LoginForm from './components/forms/LoginForm.vue';

Vue.use(Laraform)

Vue.component('LoginForm', LoginForm)

const app = new Vue({
  el: '#app'
})
