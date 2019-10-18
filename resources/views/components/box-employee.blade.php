<script type="text/x-template" id="empl-box">



  <div class="box">
    @if (\Request::is('home'))

    <p> @{{firstname}}<span> @{{lastname}}</span></p>

    <p> @{{date_of_birth}}</p>
    @else
    <p> @{{firstname}}<span> @{{lastname}}</span></p>
    <p> @{{date_of_birth}}</p>
    <p>@{{salary}}</p>
    @endif



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
