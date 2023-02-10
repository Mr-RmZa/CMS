@extends('admin.layouts.app')
@section('content')
    <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-inverse card-primary">
                            <div class="card-block p-b-0">
                                <h4 class="m-b-0">{{$post}}</h4>
                                <p>مطالب</p>
                            </div>
                            <div class="chart-wrapper p-x-1" style="height:70px;">
                                <canvas id="card-chart1" class="chart" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                    <!--/col-->

                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-inverse card-info">
                            <div class="card-block p-b-0">
                                <h4 class="m-b-0">{{$category}}</h4>
                                <p>دسته بندی ها</p>
                            </div>
                            <div class="chart-wrapper p-x-1" style="height:70px;">
                                <canvas id="card-chart2" class="chart" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                    <!--/col-->

                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-inverse card-warning">
                            <div class="card-block p-b-0">
                                <h4 class="m-b-0">{{$photo}}</h4>
                                <p>رسانه ها</p>
                            </div>
                            <div class="chart-wrapper" style="height:70px;">
                                <canvas id="card-chart3" class="chart" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                    <!--/col-->

                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-inverse card-danger">
                            <div class="card-block p-b-0">
                                <h4 class="m-b-0">{{$user}}</h4>
                                <p>کاربران</p>
                            </div>
                            <div class="chart-wrapper p-x-1" style="height:70px;">
                                <canvas id="card-chart4" class="chart" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                    <!--/col-->

                </div>

    <div class="row">
        <div class="col-md-6">
            <h3 class="p-3">لیست آخرین کاربران</h3>
            <table class="table table-striped table-bordered table-hover table-dark">
                <thead>
                <tr>
                    <th>نام</th>
                    <th>ایمیل</th>
                    <th>تاریخ ایجاد</th>
                </tr>
                </thead>

                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
                        <td>{{$user->email}}</td>
                        <td>{{\Hekmatinasser\Verta\Verta::instance($user->create_at)}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-6">
            <h3 class="p-3">لیست آخرین مطالب</h3>
            <table class="table table-striped table-bordered table-hover table-dark">
                <thead>
                <tr>
                    <th>شناسه</th>
                    <th>تصویر</th>
                    <th>تاریخ ایجاد</th>
                </tr>
                </thead>

                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td><a href="{{route('frontend.post.show', $post->slug)}}">{{$post->title}}</a></td>
                        <td>{{\Illuminate\Support\Str::limit($post->description, 10)}}</td>
                        <td>{{\Hekmatinasser\Verta\Verta::instance($post->create_at)}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
