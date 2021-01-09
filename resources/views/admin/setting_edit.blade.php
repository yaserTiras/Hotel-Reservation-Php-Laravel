
@extends('layouts.admin')

@section('title','Edit Setting')
@section('javascript')
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>


    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQRFi3dgfSVKpc1B9idTEuN3cBScszNHP9sw5jtS38n2tVEGi" crossorigin="anonymous"></script>


<style>
    a:hover,a:focus{
    text-decoration: none;
    outline: none;
    }
    .tab{ font-family: 'Baloo Tamma 2', cursive; }
    .tab .nav-tabs{
    background-color: transparent;
    border: none;
    }
    .tab .nav-tabs li a{
    color: #222;
    background: transparent;
    font-size: 19px;
    font-weight: 800;
    letter-spacing: 1px;
    text-align: center;
    text-transform: uppercase;
    padding: 13px 15px 7px;
    margin: 0 0 1px 0;
    border: none;
    border-radius: 0;
    overflow: hidden;
    position: relative;
    z-index: 1;
    transition: all 0.3s ease 0s;
    }
    .tab .nav-tabs li:last-child a{ margin-right: 0; }
    .tab .nav-tabs li a:hover,
    .tab .nav-tabs li.active a{
    color: #222;
    background: transparent;
    border: none;
    }
    .tab .nav-tabs li.active a{ color: #fff; }
    .tab .nav-tabs li a:before{
    content: "";
    background: #444;
    height: 100%;
    width: 100%;
    transform: perspective(400px) rotateX(75deg);
    transform-origin: bottom center;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all 0.5s ease 0s;
    }
    .tab .nav-tabs li.active a:before,
    .tab .nav-tabs li a:hover:before{
    background: linear-gradient(#f857a6,#ff5858);
    border-radius: 20px 20px 0 0;
    transform: perspective(500px) rotateX(0);
    }
    .tab .tab-content{
    color: #fff;
    background: #333;
    font-size: 16px;
    letter-spacing: 1px;
    line-height: 23px;
    padding: 20px;
    border-radius: 0 0 20px 20px;
    box-shadow: 0 0 20px -5px rgba(0,0,0,0.5);
    }
    .tab .tab-content h3{
    color: #fff;
    font-size: 24px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin: 0 0 7px 0;
    }
    @media only screen and (max-width: 479px){
    .tab .nav-tabs{
    background-color: #333;
    border-radius: 21px 21px 0 0;
    }
    .tab .nav-tabs li{ width: 100%; }
    .tab .nav-tabs li a{ color: #fff; }
    .tab .tab-content h3{ font-size: 18px; }
    }
    JavaScript (Tab depend on jQuery and Bootstrap.)
    1
    2
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQRFi3dgfSVKpc1B9idTEuN3cBScszNHP9sw5jtS38n2tVEGi" crossorigin="anonymous"></script>
    License Terms
</style>
@endsection

@section('content')


    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin_home')}}">Home</a></li>
            <li class="breadcrumb-item active">Edit Settings       </li>
        </ul>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tab" role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#general" aria-controls="home" role="tab" data-toggle="tab">General </a></li>
                        <li role="presentation"><a href="#smtp" aria-controls="profile" role="tab" data-toggle="tab">Smtp </a></li>
                        <li role="presentation"><a href="#socialmedia" aria-controls="profile" role="tab" data-toggle="tab">Social Media </a></li>
                        <li role="presentation"><a href="#aboutus" aria-controls="messages" role="tab" data-toggle="tab">About Us </a></li>
                        <li role="presentation"><a href="#contact" aria-controls="profile" role="tab" data-toggle="tab">Contact </a></li>
                        <li role="presentation"><a href="#references" aria-controls="profile" role="tab" data-toggle="tab">References </a></li>

                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content tabs">
                        <div role="tabpanel" class="tab-pane fade in active" id="general">
                            <h3>Section 1</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="smtp">
                            <h3>Section 2</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="socialmedia">
                            <h3>Section 3</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="col-lg-12">
        <div class="block">

            <div class="block-body">
                <form action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                      <input type="hidden" id="id" name="id"  value="{{$data->id}}" class="form-control">

                    <div class="form-group">
                        <label class="form-control-label">Title</label>
                        <input type="text" name="title" id="title" value="{{$data->title}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Keywords</label>
                        <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Description</label>
                        <input type="text" name="description" value="{{$data->description}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Company</label>
                        <input type="text" name="company" value="{{$data->company}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Address</label>
                        <input type="text" name="address" value="{{$data->address}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Phone</label>
                        <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Fax</label>
                        <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Email</label>
                        <input type="email" name="email" value="{{$data->email}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Smtp Server</label>
                        <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Smtp Email</label>
                        <input type="email" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Smtp Password</label>
                        <input type="text" name="smtppassword" value="{{$data->smtppassword}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Smtp Port</label>
                        <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Facebook</label>
                        <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Instagram</label>
                        <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Twitter</label>
                        <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">About Us</label>
                        <input id="aboutus" name="aboutus" value="{{$data->aboutus}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Contact</label>
                        <input id="contact" name="contact" value="{{$data->contact}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">References</label>
                        <input  id="references" name="references" value="{{$data->references}}" class="form-control">

                    </div>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#aboutus' ) )
                                .then( aboutus => {
                                    console.log( aboutus );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                            ClassicEditor
                                .create( document.querySelector( '#contact' ) )
                                .then( contact => {
                                    console.log( contact );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                            ClassicEditor
                                .create( document.querySelector( '#references' ) )
                                .then( references => {
                                    console.log( references );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Status</label>
                        <div class="col-sm-12">
                            <select name="status" class="form-control mb-3 mb-3">
                                <option selected="selected">{{$data->status}}</option>
                                <option>False</option>
                                <option>True</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <input type="submit" value="Update setting" class="btn btn-primary">
                    </div>
                    </div>
                </form>

            </div>
        </div>
    </div>


@endsection
