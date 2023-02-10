@extends('admin.layouts.app')
@section('content')
    @if(Session::has('delete_photo'))
        <div class="alert alert-danger">
            <div>{{session('delete_photo')}}</div>
        </div>
    @elseif(Session::has('create_photo'))
        <div class="alert alert-success">
            <div>{{session('create_photo')}}</div>
        </div>
    @elseif(Session::has('update_photo'))
        <div class="alert alert-warning">
            <div>{{session('update_photo')}}</div>
        </div>
    @elseif(Session::has('delete_photos'))
        <div class="alert alert-danger">
            <div>{{session('delete_photos')}}</div>
        </div>
    @endif
    <h1 class="p-3">لیست فایل ها</h1>
    <br>
    <form action="/admin/delete/media" method="post" class="" >
        {{csrf_field()}}
        {{method_field('delete')}}
        <div class="from-group">
            <select name="checkBoxArray" id="" class="from-control">
                <option value="delete">حذف دسته جمعی</option>
            </select>
            <input type="submit" class="btn btn-primary" value="اعمال">
        </div>
        <br>
    <table class="table table-striped table-bordered table-hover table-dark">
        <thead>
        <tr>
            <th><input type="checkbox" id="option"></th>
            <th>شناسه</th>
            <th>تصویر</th>
            <th>کاربر</th>
            <th>تاریخ ایجاد</th>
            <th>عملیات</th>
        </tr>
        </thead>

        <tbody>
        @foreach($photos as $photo)
            <tr>
                <td><input class="checkBox" type="checkbox" name="checkBoxArray[]" value="{{$photo->id}}"></td>
                <td>{{$photo->id}}</td>
                <td>
                    <img src="{{$photo->id ? $photo->path : '/images/1666564667۲۰۲۲۱۰۰۹_۲۰۲۴۴۸.jpg'}}" class="img-fluid" width="100">
                </td>
                <td>{{$photo->user->name}}</td>
                <td>{{\Hekmatinasser\Verta\Verta::instance($photo->create_at)}}</td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'action' => ['App\Http\Controllers\Admin\AdminPhotoController@destroy', $photo->id]]) !!}

                    <div class="form-group mt-3">
                        {!! Form::submit('حذف', ['class'=>'btn btn-danger']) !!}
                    </div>

                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </form>
    <div class="col-md-6 offset-md-5">{{$photos->links("pagination::bootstrap-4")}}</div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('#option').click(function () {
                if (this.checked) {
                    $('.checkBox').each(function () {
                        this.checked = true;
                    })
                } else {
                    $('.checkBox').each(function () {
                        this.checked = false;
                    })
                }
            })
        });
    </script>
@endsection
