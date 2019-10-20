@extends('layouts.customlayout')
@section('section')
    @foreach ($employees as $employee)
      <div class="box">

        <p>{{$employee -> firstname}}<span>{{$employee -> lastname}}</span></p>
        <p>{{$employee -> date_of_birth}}</p>
        <a href={{route('empl.posts.show',$employee -> id)}} id="shw_pst">Show Post</a>
        <a href={{route('empl.show',$employee -> id)}} id="shw_slr">Show Salary</a>

      </div>

    @endforeach



@endsection
