@extends('layouts.main')
@section('main-container')


<div class=" inner-page-cover">
  <div class="container">
    <div class="row align-items-left justify-content-left text-left">
      @foreach ($todolist as $item)
        <h3>{{$item}}</h3>
      @endforeach

      @if(count($todolist))
      <div class="card-footer"></div>
      You have {{ count($todolist) }} pending tasks
      @endif
    </div>
  </div>
</div>  


@endsection