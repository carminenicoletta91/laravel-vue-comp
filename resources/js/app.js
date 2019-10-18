require('./bootstrap');
window.Vue=require('vue');
var $=require('jquery');
function init(){
  console.log("Hello jquery");
  new Vue({
    el:'#app1',
  
  });

}
$(document).ready(init);
