<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets') }}/admin/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    @yield('css')
    @yield('javascript')
</head>


<!-- Breadcrumb-->


<div class="col-lg-12">
    <div class="block">
        @include('home.message')

        <div class="block-body">
            <form action="{{route('admin_reservation_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <table class="table table-striped">

                        <tr>
                            <th>Id</th>
                            <td>{{ $data->id }}</td>
                        </tr>
                        <tr>
                            <th>UserId</th>
                            <td>{{ $data->user_id }}</td>
                        </tr>
                        <tr>
                            <th>HotelId</th>
                            <td>{{ $data->hotel_id }}</td>
                        </tr>
                        <tr>
                            <th>RoomId</th>
                            <td>{{ $data->room_id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $data->name }}</td>
                        </tr>
                        <tr>
                            <th>SurName</th>
                            <td>{{ $data->surname }}</td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <td>{{ $data->email }}</td>
                        </tr>

                        <tr>
                            <th>Phone</th>
                            <td>{{ $data->phone }}</td>
                        </tr>

                        <tr>
                            <th>Check In</th>
                            <td>{{ $data->checkin }}</td>
                        </tr>
                        <tr>
                            <th>Check Out</th>
                            <td>{{ $data->checkout }}</td>
                        </tr>
                        <tr>
                            <th>Days</th>
                            <td>{{ $data->days }}</td>
                        </tr>

                        <tr>
                            <th>Reservated at</th>
                            <td> {{$data->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Admin Note</th>
                            <td>
                                <textarea id="message" name="message" >{{ $data->message }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                <select name="status">
                                    <option  selected>{{$data->status}}</option>
                                    <option>Accepted</option>
                                    <option>Completed</option>
                                    <option>Canceled</option>
                                    <option>Reserveted</option>
                                </select>

                            </td>



                        </tr>

                        <tr>
                            <td>
                                <div class="table-group">
                                    <input type="submit" value="Update " class="btn btn-primary">
                                </div>
                            </td>
                        </tr>


                    </table>




                </div>
            </form>

        </div>
    </div>
</div>


