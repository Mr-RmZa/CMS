@extends('admin.layouts.app')
@section('content')
    <h1 class="p-3">ویرایش کاربر</h1>

    {!! Form::model($post ,['method' => 'PATCH', 'action' => ['App\Http\Controllers\Admin\AdminPostController@update', $post->id], 'files'=>true]) !!}
    @include('partials.form-errors')
    <div class="form-group">
        <img src="{{$post->photo ? $post->photo->path : '/images/1666564667۲۰۲۲۱۰۰۹_۲۰۲۴۴۸.jpg'}}" class="img-fluid" width="100">
        {!! Form::label('title', 'عنوان') !!}
        {!! Form::text('title', $post->title, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('slug', 'نام مستعار') !!}
        {!! Form::text('slug', $post->slug, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'توضیحات') !!}
        {!! Form::textarea('description', $post->description, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category', 'دسته بندی') !!}
        {!! Form::select('category', $categories, $post->category->id, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status', 'وضعیت') !!}
        {!! Form::select('status', [0=>'غیرفعال',1=>'فعال'], null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('meta_description', 'متا توضیحات') !!}
        {!! Form::textarea('meta_description', $post->meta_description, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('meta_keywords', 'متا برچسب ها') !!}
        {!! Form::textarea('meta_keywords', $post->meta_keywords, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('org_photo', 'تصویر اصلی') !!}
        {!! Form::file('org_photo', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group mt-3">
        {!! Form::submit('update', ['class'=>'btn btn-success col-md-3']) !!}
    </div>
    {!! Form::close() !!}

    {!! Form::open(['method' => 'DELETE', 'action' => ['App\Http\Controllers\Admin\AdminPostController@destroy', $post->id]]) !!}

    <div class="form-group mt-3">
        {!! Form::submit('delete', ['class'=>'btn btn-danger col-md-3']) !!}
    </div>

    {!! Form::close() !!}
@endsection
