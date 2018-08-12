require('./bootstrap');

window.Vue = require('vue');
//window.Slug = require('slug');
window.slugify = require('slugify');
import Buefy from 'buefy';

Vue.use(Buefy);

Vue.component('slug-widget',require('./components/SlugWidget.vue'));
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
