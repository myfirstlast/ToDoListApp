@extends('layouts.main')
@section('main-container')

@csrf
<div class="input-group card-body  shadow-sm containerw-25 mt-5" method="POST" autocomplete="off">
        <input type="text" name="content" class="form-control" placeholder="Add your new todo here">
        <button type="submit" class="btn btn-dark btn-sm"><i class="fas fa-plus"></i></button>
</div>

@if(count($todolist))
    <div class="card-footer"></div>
    You have {{ count($todolist) }} pending tasks<br>
@endif

@endsection
