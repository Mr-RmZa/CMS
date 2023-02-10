@extends('frontend.layouts.app')
@section('head')
    <meta name="description" content="{{$post->meta_description}}">
    <meta name="keywords" content="{{$post->meta_keywords}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
@section('content')
    @if(Session::has('add_comment'))
        <div class="alert alert-success mt-4">
            <div>{{session('add_comment')}}</div>
        </div>
    @endif
        <!-- Title -->
        <h1 class="mt-4">{{$post->title}}</h1>

        <!-- Author -->
        <p class="lead">
            نویسنده توسط
            <a href="#">{{$post->user->name}}</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on {{\Hekmatinasser\Verta\Verta::instance($post->create_at)}}</p>

        <hr>

        <!-- Preview Image -->
        <img src="{{$post->photo_id ? $post->photo->path : '/images/1666564667۲۰۲۲۱۰۰۹_۲۰۲۴۴۸.jpg'}}" class="img-fluid rounded">

        <hr>

        <!-- Post Content -->
        <div>
            <p class="text-justify">{{$post->description}}</p>
        </div>

        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
            <h5 class="card-header">نظر خود را ثبت کنید:</h5>
            <div class="card-body">
                {!! Form::open(['method' => 'POST', 'route' => ['frontend.comment.store', $post->id]]) !!}
                @include('partials.form-errors')

                <div class="form-group">
                    {!! Form::label('description', 'توضیحات') !!}
                    {!! Form::textarea('description', null, ['class' => 'form-control', 'required']) !!}
                </div>

                <div class="form-group mt-3">
                    {!! Form::submit('submit', ['class'=>'btn btn-success']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>

        <!-- Single Comment -->
        @include('partials.comment', ['comment'=>$post->comment, 'post'=>$post])


@endsection

@section('navbar')
    @include('partials.navbar', ['categories'=>$categories])
@endsection

@section('sidebar')
    @include('partials.sidebar', ['categories'=>$categories])
@endsection
