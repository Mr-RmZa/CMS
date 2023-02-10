@extends('admin.layouts.app')
@section('content')
    @if(Session::has('delete_comment'))
        <div class="alert alert-danger">
            <div>{{session('delete_comment')}}</div>
        </div>
    @elseif(Session::has('update_comment'))
        <div class="alert alert-warning">
            <div>{{session('update_comment')}}</div>
        </div>
    @elseif(Session::has('comment_active'))
        <div class="alert alert-success">
            <div>{{session('comment_active')}}</div>
        </div>
    @elseif(Session::has('comment_inactive'))
        <div class="alert alert-danger">
            <div>{{session('comment_inactive')}}</div>
        </div>
    @endif
    <h1 class="p-3">لیست نظرات</h1>
    <table class="table table-striped table-bordered table-hover table-dark">
        <thead>
        <tr>
            <th>شناسه</th>
            <th>توضیحات</th>
            <th>مطلب</th>
            <th>تاریخ ایجاد</th>
            <th>وضعیت</th>
            <th>عملیات</th>
        </tr>
        </thead>

        <tbody>
        @foreach($comments as $comment)
            <tr>
                <td><a href="{{route('comment.edit', $comment->id)}}">{{$comment->id}}</a></td>
                <td class="text-justify">{{$comment->description}}</td>
                <td>{{$comment->post->title}}</td>
                <td>{{\Hekmatinasser\Verta\Verta::instance($comment->create_at)}}</td>
                <td>
                    @if($comment->status == 0)
                        <span class="tag tag-pill tag-danger">غیرفعال</span>
                    @else
                        <span class="tag tag-pill tag-success">فعال</span>
                    @endif
                </td>
                <td>
                    @if($comment->status == 0)
                        {!! Form::open(['method' => 'POST', 'action' => 'App\Http\Controllers\Admin\AdminCommentController@actions', 'route' => ['comment.actions', $comment->id]]) !!}
                        <span class="input-group-btn">
                                {!! Form::hidden('action', 'active') !!}
                                {!! Form::submit('فعال', ['class'=>'btn btn-success']) !!}
                        </span>
                        {!! Form::close() !!}
                    @else
                        {!! Form::open(['method' => 'POST', 'action' => 'App\Http\Controllers\Admin\AdminCommentController@action', 'route' => ['comment.actions', $comment->id]]) !!}
                        <span class="input-group-btn">
                                {!! Form::hidden('action', 'inactive') !!}
                                {!! Form::submit('غیر فعال', ['class'=>'btn btn-danger']) !!}
                        </span>
                        {!! Form::close() !!}
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="col-md-6 offset-md-5">{{$comments->links("pagination::bootstrap-4")}}</div>
@endsection
