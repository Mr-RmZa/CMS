@extends('admin.layouts.app')
@section('content')
    @if(Session::has('delete'))
        <div class="alert alert-danger">
            <div>{{session('delete')}}</div>
        </div>
    @elseif(Session::has('create'))
        <div class="alert alert-success">
            <div>{{session('create')}}</div>
        </div>
    @elseif(Session::has('update'))
        <div class="alert alert-warning">
            <div>{{session('update')}}</div>
        </div>
    @endif
    <h1 class="p-3">لیست کاربران</h1>
    <table class="table table-striped table-bordered table-hover table-dark">
        <thead>
        <tr>
            <th>آواتار</th>
            <th>نام</th>
            <th>ایمیل</th>
            <th>نقش</th>
            <th>تاریخ ایجاد</th>
            <th>وضعیت</th>
        </tr>
        </thead>

        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    <img src="{{$user->photo ? $user->photo->path : '/images/1666564667۲۰۲۲۱۰۰۹_۲۰۲۴۴۸.jpg'}}" class="img-fluid" width="100">
                </td>
                <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>
                    <ul>
                        @foreach($user->roles as $role)
                            <li>{{$role->name}}</li>
                        @endforeach
                    </ul>
                </td>
                <td>{{\Hekmatinasser\Verta\Verta::instance($user->create_at)}}</td>
                <td>
                    @if($user->status == 0)
                        <span class="tag tag-pill tag-danger">غیرفعال</span>
                    @else
                        <span class="tag tag-pill tag-success">فعال</span>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="col-md-6 offset-md-5">{{$users->links("pagination::bootstrap-4")}}</div>
@endsection
