@extends('frontend.layouts.app')
@section('head')
    <meta name="description" content="توضیحات">
    <meta name="keywords" content="برچسب ها">
@endsection
@section('content')
    <h3 class="mt-4">آخرین مطالب</h3>
    @foreach($posts as $post)
        <!-- Title -->
        <h1 class="mt-4">{{$post->title}}</h1>

        <!-- Author -->
        <p class="lead">
            نویسنده توسط
            <a href="#">{{$post->user->name}}</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>انتشار شده در {{\Hekmatinasser\Verta\Verta::instance($post->create_at)}}</p>

        <hr>

        <!-- Preview Image -->
        <a href="{{route('frontend.post.show', $post->slug)}}">
            <img src="{{$post->photo_id ? $post->photo->path : '/images/1666564667۲۰۲۲۱۰۰۹_۲۰۲۴۴۸.jpg'}}" class="img-fluid rounded">
        </a>
        <hr>

        <!-- Post Content -->
        <div class="mb-5">
            <p>{{\Illuminate\Support\Str::limit($post->description, 100)}}</p>
            <p>
                <a href="{{route('frontend.post.show', $post->slug)}}" class="float-right">ادامه مطلب...</a>
            </p>
        </div>
    @endforeach
    <div class="col-md-6 offset-md-5">{{$posts->links("pagination::bootstrap-4")}}</div>
@endsection

@section('navbar')
    @include('partials.navbar', ['categories'=>$categories])
@endsection

@section('sidebar')
    @include('partials.sidebar', ['categories'=>$categories])
@endsection
