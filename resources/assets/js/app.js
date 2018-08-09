require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy';

Vue.use(Buefy);

//Vue.component('example-component', require('./components/ExampleComponent.vue'));
/*
var app = new Vue({
  el:'#app',
  data:{}
});*/

$(document).ready(function() {
  $(".navbar-burger").click(function() {
    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
    $(".navbar-burger").toggleClass("is-active");
    $(".navbar-menu").toggleClass("is-active");
  });
});

require('./manage');
