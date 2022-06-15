@extends('layout')
@section('content')

<div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                <div class="row justify-content-center mb-4">
                    <div class="col-md-8 text-center">
                        <h1>You are using the best To Do List application</h1>
                        <p class="lead mb-5">Always remember your tasks</p>
                        <div><a href="/create" class="btn btn-primary btn-md">Create</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
