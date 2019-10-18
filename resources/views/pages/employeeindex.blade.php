@extends('layouts.customlayout')
@section('section')
@include('components.box-employee')

  <div id="app1">
    @foreach ($employees as $employee)

      <a href={{route('empl.show',$employee -> id)}} class="show-link">show</a>
      <empl-box
        :firstname='"{{$employee -> firstname}}"'
        :lastname='"{{$employee -> lastname}}"'
        :date_of_birth='"{{$employee -> date_of_birth}}"'

      >

      </empl-box>
    @endforeach
  </div>


@endsection
