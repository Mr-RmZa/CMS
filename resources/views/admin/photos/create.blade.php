@extends('admin.layouts.app')
@section('style')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endsection
@section('content')
    <h1 class="p-3">آپلود فایل</h1>

    {!! Form::open(['method' => 'POST', 'action' => 'App\Http\Controllers\Admin\AdminPhotoController@store', 'class'=>'dropzone', 'files'=>true]) !!}
    @include('partials.form-errors')



    {!! Form::close() !!}

@endsection
@section('script')
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
@endsection
