@extends('admin.layouts.app')
@section('content')
    <h1 class="p-3">ایجاد کاربر جدید</h1>

    {!! Form::open(['method' => 'POST', 'action' => 'App\Http\Controllers\Admin\AdminUserController@store', 'files'=>true]) !!}
    @include('partials.form-errors')
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
        {!! Form::select('roles[]', $roles, 3, ['multiple'=>'multiple', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status', 'وضعیت') !!}
        {!! Form::select('status', [0=>'غیرفعال',1=>'فعال'], 1, ['class' => 'form-control']) !!}
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
        {!! Form::submit('submit', ['class'=>'btn btn-success']) !!}
    </div>
    {!! Form::close() !!}

@endsection
