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



    <div class="block">
        @include('home.message')


        <div class="block-body">
            <div class="block margin-bottom-sm">
            <div class="container">
                <div class="form-group row">
                    <table class="table table-striped">

                        <tr>
                            <th>Id</th>
                            <td>{{ $data->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $data->name }}</td>
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
                            <th>Address</th>
                            <td>{{ $data->address }}</td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>{{ $data->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Roles</th>
                            <td>
                                <table>
                                    @foreach($data->roles as $row)
                                        <tr>
                                            <td>{{ $row->name }}</td>
                                            <td>
                                                <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="30"></a>
                                            </td>
                                            </td>

                                        </tr>
                                    @endforeach
                                </table>
                            </td>
                        </tr>


                        <tr>
                            <th>Add Role</th>
                            <td>
                                <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <select name="roleid">
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}">{{$rs->name}}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-primary">Add Role</button>
                                </form>


                            </td>
                        </tr>

                    </table>
                </div>


            </form>
        </div>
        </div>
    </div>
</div>


