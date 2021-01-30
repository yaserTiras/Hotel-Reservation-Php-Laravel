<html>
<head>
    <title>Room List</title>

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
                <form action="{{route('admin_room_store',['hotel_id' => $data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label class="form-control-label">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Description</label>
                        <input type="text" name="description" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Price</label>
                        <input type="text" name="price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Adet</label>
                        <input type="text" name="adet" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Status</label>
                        <div class="col-sm-12">
                            <select name="status" class="form-control mb-3 mb-3">
                                <option selected="selected">False</option>
                                <option>True</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <input type="submit" value="Add image" class="btn btn-primary">
                    </div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Adet</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rooms as $rs )
                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td>{{ $rs->title }}</td>
                                <td>{{ $rs->price }}</td>
                                <td>{{ $rs->adet }}</td>
                                <td>
                                    @if ($rs->image)
                                        <img src="{{ Storage::url($rs->image)}}" height="30" alt="">
                                    @endif
                                </td>
                                <td>{{ $rs->status }}</td>
                                <td><a href="{{route('admin_room_delete',['id' => $rs->id,'hotel_id'=>$data->id ])}}" onclick="return confirm('Are you sure?')">
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

