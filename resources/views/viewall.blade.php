@extends('layout')
@section('content')


<div class="inner-page-cover">
  <div class="container">
    <div class="row align-items-left justify-content-left text-left">

      @foreach ($todolist as $item)

        <div class="col-md-3">
          <h2 class="footer-heading mb-4">ID</h2>
          <p>{{$item->id}}</p>
        </div>

        <div class="col-md-3">
          <h2 class="footer-heading mb-4">To do</h2>
          <p>{{$item->content}}</p>
        </div>

        <div class="col-md-3">
          <h2 class="footer-heading mb-4">Created at</h2>
          <p>{{$item->created_at}}</p>
        </div>

        <div class="col-md-3">
          <h2 class="footer-heading mb-4">Updated at</h2>
          <p>{{$item->updated_at}}</p>
        </div>
        
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