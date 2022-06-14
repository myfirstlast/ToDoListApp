@extends('layout')
@section('content')

@csrf
<div class="input-group card-body shadow-sm containerw-25 mt-5" method="POST" autocomplete="off">
        <input type="text" name="content" class="form-control" placeholder="Add your new todo here">
        <button type="submit" class="btn btn-dark btn-sm"><i class="fas fa-plus"></i></button>
</div>

<div class="mt-5">
    @if(count($todolist))
        <h6>You have {{ count($todolist) }} pending tasks</h6><br>
    @else
        <h6>You don't have any pending tasks</h6><br>
    @endif
</div>
@endsection
