@extends('admin.layouts.app')
@section('content')
    <h1 class="p-3">ایجاد مطلب جدید</h1>

    {!! Form::open(['method' => 'POST', 'action' => 'App\Http\Controllers\Admin\AdminPostController@store', 'files'=>true]) !!}
    @include('partials.form-errors')
    <div class="form-group">
        {!! Form::label('title', 'عنوان') !!}
        {!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('slug', 'نام مستعار') !!}
        {!! Form::text('slug', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'توضیحات') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category', 'دسته بندی') !!}
        {!! Form::select('category', $categories, 3, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status', 'وضعیت') !!}
        {!! Form::select('status', [0=>'غیرفعال',1=>'فعال'], 1, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('meta_description', 'متا توضیحات') !!}
        {!! Form::textarea('meta_description', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('meta_keywords', 'متا برچسب ها') !!}
        {!! Form::textarea('meta_keywords', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('org_photo', 'تصویر اصلی') !!}
        {!! Form::file('org_photo', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group mt-3">
        {!! Form::submit('submit', ['class'=>'btn btn-success']) !!}
    </div>
    {!! Form::close() !!}

@endsection
