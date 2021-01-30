<html>
<head>
    <title>Image Galleri</title>

    <link rel="stylesheet" href="{{ asset('assets') }}/admin/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/custom.css">
    <link rel="shortcut icon" href="{{ asset('assets') }}/admin/img/favicon.ico">




</head>
<body class="block" >


        <div class="block" >
            <div class="title"><strong class="d-block">Hotel: {{$data->title}}</strong><span class="d-block"></span></div>
            <div class="block-body">
                <form action="{{route('user_image_store',['hotel_id' => $data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label class="form-control-label">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Add image" class="btn btn-primary">
                    </div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($images as $rs )
                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td>{{ $rs->title }}</td>
                                <td>
                                    @if ($rs->image)
                                        <img src="{{ Storage::url($rs->image)}}" height="30" alt="">
                                    @endif
                                </td>
                                <td><a href="{{route('user_image_delete',['id' => $rs->id,'hotel_id'=>$data->id ])}}" onclick="return confirm('Are you sure?')">
                                        <img src="{{asset('assets/admin/images')}}/delete.png" height="20"></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                </form>

        </div>
    </div>

</body>
</html>

