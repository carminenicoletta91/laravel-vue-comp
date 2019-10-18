@extends('layouts.customlayout')
@section('section')
@include('components.box-employee')
  <div id="app1">



      <empl-box
        :firstname='"{{$employee -> firstname}}"'
        :lastname='"{{$employee -> lastname}}"'
        :date_of_birth='"{{$employee -> date_of_birth}}"'
        :salary='"{{$employee -> salary}}"'
      >

      </empl-box>

  </div>
@endsection
