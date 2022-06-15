@extends('layout')
@section('content')


<div class="inner-page-cover">
  <div class="container">
    <div class="row align-items-left justify-content-left text-left">

      <form action="/viewall" class="input-group card-body containerw-25 mt-5" autocomplete="off">
        <input type="text" name="search" class="form-control" placeholder="Search">
        <button type="submit" class="btn btn-dark btn-sm"><i class="fas fa-search"></i></button>
      </form>

      <div class="col-md-3"><h2>ID</h2></div>
      <div class="col-md-3"><h2>To do</h2></div>
      <div class="col-md-3"><h2>Created at</h2></div>
      <div class="col-md-3"><h2>Updated at</h2></div>

      @foreach ($todolist as $item)

        <div class="col-md-3">
          <p>{{$item->id}}</p>
        </div>

        <div class="col-md-3">
          <p>{{$item->content}}</p>
        </div>

        <div class="col-md-3">
          <p>{{$item->created_at}}</p>
        </div>

        <div class="col-md-3">
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