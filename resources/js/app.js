require('./bootstrap');
window.Vue=require('vue');
window.$=require('jquery');
window.JQuery = require('jquery');
function init(){
   token = $('meta[name="csrf-token"]').attr('content');
  window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token;

  new Vue({
    el:'#app1'

  });
  new Vue({
    el:'#app2',


  });

}

$(document).ready(init);
