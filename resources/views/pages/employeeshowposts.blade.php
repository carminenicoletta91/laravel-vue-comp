@extends('layouts.customlayout')
@section('section')
@include('components.box-employee')
@include('components.box-post')
  <div id="app1">
    <empl-box
      :firstname='"{{$employee -> firstname}}"'
      :lastname='"{{$employee -> lastname}}"'
      :date_of_birth='"{{$employee -> date_of_birth}}"'
    >
    </empl-box>
  </div>
  <div id="app2">

    @foreach ($employee -> posts as $post)

      <pst-box
        :id='{{$post -> id}}'
        :title='"{{$post -> title}}"'
        :content='"{{$post -> content}}"'
        :likes='{{$post -> likes}}'
        :urllink='"{{route('empl.postcomm.show',$post -> id)}}"'
      >
      </pst-box>


    @endforeach
  </div>


@endsection
