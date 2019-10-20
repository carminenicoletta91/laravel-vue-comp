@extends('layouts.customlayout')
@section('section')


    @foreach ($post -> comments as $comment)
      <div class="box-comment">
        <p>{{$comment -> content}}</p>
      </div>
    @endforeach
@endsection
