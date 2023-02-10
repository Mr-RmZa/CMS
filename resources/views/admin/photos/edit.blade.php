@extends('admin.layouts.app')
@section('content')
    <h1 class="p-3">ویرایش دسته بندی</h1>

    {!! Form::model($category ,['method' => 'PATCH', 'action' => ['App\Http\Controllers\Admin\AdminCategoryController@update', $category->id]]) !!}
    @include('partials.form-errors')
    <div class="form-group">
        {!! Form::label('title', 'عنوان') !!}
        {!! Form::text('title', $category->title, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('slug', 'نام مستعار') !!}
        {!! Form::text('slug', $category->slug, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('meta_description', 'متا توضیحات') !!}
        {!! Form::textarea('meta_description', $category->meta_description, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('meta_keywords', 'متا برچسب ها') !!}
        {!! Form::textarea('meta_keywords', $category->meta_keywords, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group mt-3">
        {!! Form::submit('update', ['class'=>'btn btn-success col-md-3']) !!}
    </div>
    {!! Form::close() !!}

    {!! Form::open(['method' => 'DELETE', 'action' => ['App\Http\Controllers\Admin\AdminCategoryController@destroy', $category->id]]) !!}

    <div class="form-group mt-3">
        {!! Form::submit('delete', ['class'=>'btn btn-danger col-md-3']) !!}
    </div>

    {!! Form::close() !!}
@endsection
