@extends('admin.layouts.app')
@section('content')
    @if(Session::has('delete_post'))
        <div class="alert alert-danger">
            <div>{{session('delete_post')}}</div>
        </div>
    @elseif(Session::has('create_post'))
        <div class="alert alert-success">
            <div>{{session('create_post')}}</div>
        </div>
    @elseif(Session::has('update_post'))
        <div class="alert alert-warning">
            <div>{{session('update_post')}}</div>
        </div>
    @endif
    <h1 class="p-3">لیست پست ها</h1>
    <table class="table table-striped table-bordered table-hover table-dark">
        <thead>
        <tr>
            <th>تصویر</th>
            <th>عنوان</th>
            <th>کاربر</th>
            <th>توضیحات</th>
            <th>دسته بندی</th>
            <th>تاریخ ایجاد</th>
            <th>وضعیت</th>
        </tr>
        </thead>

        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>
                    <img src="{{$post->photo_id ? $post->photo->path : '/images/1666564667۲۰۲۲۱۰۰۹_۲۰۲۴۴۸.jpg'}}" class="img-fluid" width="100">
                </td>
                <td><a href="{{route('posts.edit', $post->id)}}">{{$post->title}}</a></td>
                <td>
                    <img src="{{$post->user->photo_id ? $post->user->photo->path : '/images/1666564667۲۰۲۲۱۰۰۹_۲۰۲۴۴۸.jpg'}}" class="img-fluid" width="100">
                    {{$post->user->name}}
                </td>
                <td>{{\Illuminate\Support\Str::limit($post->description, 20)}}</td>
                <td>{{$post->category->title}}</td>
                <td>{{\Hekmatinasser\Verta\Verta::instance($post->create_at)}}</td>
                <td>
                    @if($post->status == 0)
                        <span class="tag tag-pill tag-danger">غیرفعال</span>
                    @else
                        <span class="tag tag-pill tag-success">فعال</span>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="col-md-6 offset-md-5">{{$posts->links("pagination::bootstrap-4")}}</div>
@endsection
