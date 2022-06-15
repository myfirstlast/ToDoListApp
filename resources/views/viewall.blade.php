@extends('layout')
@section('content')


<div class="inner-page-cover">
  <div class="container">
    <div class="row align-items-left justify-content-left text-left">

      <form action="/viewall" class="input-group card-body containerw-25 mt-5" autocomplete="off">
        <input type="text" name="search" class="form-control" placeholder="Search">
        <button type="submit" class="btn btn-dark btn-sm"><i class="fas fa-search"></i></button>
      </form>

      <div class="col-md-2"><h2>ID</h2></div>
      <div class="col-md-2"><h2>To do</h2></div>
      <div class="col-md-2"><h2>Created at</h2></div>
      <div class="col-md-2"><h2>Updated at</h2></div>
      <div class="col-md-2"><h2>Edit</h2></div>
      <div class="col-md-2"><h2>Delete</h2></div>

      @foreach ($todolist as $item)
      @csrf

        <div class="col-md-2">
          <p>{{$item->id}}</p>
        </div>

        <div class="col-md-2">
          <p>{{$item->content}}</p>
        </div>

        <div class="col-md-2">
          <p>{{$item->created_at}}</p>
        </div>

        <div class="col-md-2">
          <p>{{$item->updated_at}}</p>
        </div>

        {{-- @method('edit') --}}
        <a href="/{{$item->id}}/edit" type="submit" class="btn btn-link btn-sm float-end col-md-2">
            <i class="fas fa-edit"></i>
        </a>

        <form action="/{{$item->id}}" method="POST" class="btn btn-link btn-sm float-end col-md-2">
          @csrf
          @method('DELETE')
          <button class="text-red-500"><i class="fas fa-trash"></i>Delete</button>
        </form>
        
      @endforeach
      <div class="mt-6 p-4">
        {{$todolist->links()}}
      </div>
    </div>
  </div>
</div>  


@endsection