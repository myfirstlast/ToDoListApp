@extends('layout')
@section('content')

@csrf
<form action="/{{$task->id}}" class="input-group card-body shadow-sm containerw-25 mt-5" method="POST" autocomplete="off">
    @csrf
    @method('PUT')
    <input value="{{$task->content}}" type="text" name="content" class="form-control" placeholder="edit your todo task here">
    <button type="submit" class="btn btn-dark btn-sm"><i class="fas fa-plus">Update</i></button>
</form>
@error('content')
    <p class="text-red-500 text-xs mt-1">Empty field is not allowed</p>
@enderror

@endsection
