@extends('layout')
@section('content')


<div class="inner-page-cover">
  <div class="container">
    <div class="row align-items-left justify-content-left text-left">
      @foreach ($todolist as $item)
      {{-- <h2>ID  ToDo  Created At  Update At</h2>
      <h3>{{$item->id}} {{$item->content}} {{$item->created_at}} {{$item->updated_at}}</h3> --}}
      <h3>{{$item->content}}</h3>
      @endforeach

      @if(count($todolist))
        <div class="card-footer"></div>
        You have {{ count($todolist) }} pending tasks<br>
      @else
        <h6>You don't have any pending tasks</h6><br>
      @endif
    </div>
  </div>
</div>  


@endsection