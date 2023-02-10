@extends('admin.layouts.app')
@section('content')
    <h1 class="p-3">ویرایش دسته بندی</h1>

    {!! Form::model($comment ,['method' => 'PATCH', 'action' => ['App\Http\Controllers\Admin\AdminCommentController@update', $comment->id]]) !!}
    @include('partials.form-errors')

    <div class="form-group">
        {!! Form::label('description', 'توضیحات') !!}
        {!! Form::textarea('description', $comment->description, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group mt-3">
        {!! Form::submit('update', ['class'=>'btn btn-success col-md-3']) !!}
    </div>
    {!! Form::close() !!}

    {!! Form::open(['method' => 'DELETE', 'action' => ['App\Http\Controllers\Admin\AdminCommentController@destroy', $comment->id]]) !!}

    <div class="form-group mt-3">
        {!! Form::submit('delete', ['class'=>'btn btn-danger col-md-3']) !!}
    </div>

    {!! Form::close() !!}
@endsection
