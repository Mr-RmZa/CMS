@extends('admin.layouts.app')
@section('content')
    <h1 class="p-3">ویرایش کاربر</h1>

    {!! Form::model($user ,['method' => 'PATCH', 'action' => ['App\Http\Controllers\Admin\AdminUserController@update', $user->id], 'files'=>true]) !!}    @include('partials.form-errors')
    <div class="form-group">
        <img src="{{$user->photo ? $user->photo->path : '/images/1666564667۲۰۲۲۱۰۰۹_۲۰۲۴۴۸.jpg'}}" class="img-fluid" width="100">
    </div>

    <div class="form-group">
        {!! Form::label('name', 'نام') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'ایمیل') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('roles', 'نقش') !!}
        {!! Form::select('roles[]', $roles, null, ['multiple'=>'multiple', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status', 'وضعیت') !!}
        {!! Form::select('status', [0=>'غیرفعال',1=>'فعال'], null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'رمز عبور') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('avatar', 'تصویر پروفایل') !!}
        {!! Form::file('avatar', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group mt-3">
        {!! Form::submit('update', ['class'=>'btn btn-success col-md-3']) !!}
    </div>
    {!! Form::close() !!}

    {!! Form::open(['method' => 'DELETE', 'action' => ['App\Http\Controllers\Admin\AdminUserController@destroy', $user->id]]) !!}

    <div class="form-group mt-3">
        {!! Form::submit('delete', ['class'=>'btn btn-danger col-md-3']) !!}
    </div>

    {!! Form::close() !!}
@endsection
