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
                <form action="{{route('admin_message_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf

                        <div class="form-group row">
                            <table class="table table-striped">

                                <tr>
                                    <th>Id</th>
                                    <td>{{ $data->id }}</td>
                                </tr>

                                <tr>
                                    <th>Name & SureName</th>
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
                                    <th>Subject</th>
                                <td>{{ $data->subject }}</td>
                                </tr>

                                <tr>
                                    <th>Message</th>
                                <td>{{ $data->message }}</td>
                                </tr>

                                <tr>
                                    <th>Admin Note</th><td>
                                <textarea id="note" name="note" >{{ $data->note }}</textarea>
                                </td>
                                </tr>


                                <tr>
                                    <td>
                                    <div class="table-group">
                                        <input type="submit" value="Update hotel" class="btn btn-primary">
                                    </div>
                                    </td>
                                </tr>


                            </table>
                        </div>




                </form>
            </div>
        </div>
    </div>

