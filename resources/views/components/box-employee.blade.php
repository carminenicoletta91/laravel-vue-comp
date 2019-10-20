<script type="text/x-template" id="empl-box">



  <div class="box">
    <p>@{{firstname}} <span>@{{lastname}}</span> </p>
    <p>@{{date_of_birth}}</p>
    <p v-show="salary">@{{salary}}$</p>

  </div>

</script>
<script type="text/javascript">
  Vue.component('empl-box',{
    template:'#empl-box',
    props:{
    firstname:String,
    lastname:String,
    date_of_birth:String,
    salary:String,
  },
});
</script>
