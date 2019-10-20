@extends('layouts.customlayout')
@section('section')


    @foreach ($post -> comments as $comment)
      <div class="box">
        <p>{{$comment -> content}}</p>
      </div>
    @endforeach
@endsection
