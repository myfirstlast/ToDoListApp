@extends('layout')
@section('content')

@csrf
<form action="/" class="input-group card-body shadow-sm containerw-25 mt-5" method="POST" autocomplete="off">
    @csrf    
    <input type="text" name="content" class="form-control" placeholder="Add your new todo task here">
    <button type="submit" class="btn btn-dark btn-sm"><i class="fas fa-plus"></i></button>
</form>
@error('content')
    <p class="text-red-500 text-xs mt-1">Empty field is not allowed</p>
@enderror

<div class="mt-5">
    @if(count($todolist))
        <h6>You have {{ count($todolist) }} pending tasks</h6><br>
    @else
        <h6>You don't have any pending tasks</h6><br>
    @endif
</div>
@endsection
