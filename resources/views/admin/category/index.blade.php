@extends('admin.layouts.app')
@section('content')
    @if(Session::has('delete_category'))
        <div class="alert alert-danger">
            <div>{{session('delete_category')}}</div>
        </div>
    @elseif(Session::has('create_category'))
        <div class="alert alert-success">
            <div>{{session('create_category')}}</div>
        </div>
    @elseif(Session::has('update_category'))
        <div class="alert alert-warning">
            <div>{{session('update_category')}}</div>
        </div>
    @endif
    <h1 class="p-3">لیست پست ها</h1>
    <table class="table table-striped table-bordered table-hover table-dark">
        <thead>
        <tr>
            <th>عنوان</th>
            <th>متا توضیحات</th>
            <th>متا برچسب ها</th>
            <th>تاریخ ایجاد</th>
        </tr>
        </thead>

        <tbody>
        @foreach($categories as $category)
            <tr>
                <td><a href="{{route('category.edit', $category->id)}}">{{$category->title}}</a></td>
                <td>{{$category->meta_description}}</td>
                <td>{{$category->meta_keywords}}</td>
                <td>{{\Hekmatinasser\Verta\Verta::instance($category->create_at)}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="col-md-6 offset-md-5">{{$categories->links("pagination::bootstrap-4")}}</div>
@endsection
