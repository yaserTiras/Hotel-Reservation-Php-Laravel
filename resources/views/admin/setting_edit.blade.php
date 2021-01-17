
@extends('layouts.admin')

@section('title','Edit Setting')
@section('javascript')
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>



    <style type="text/css">
        /* Tabs*/
        section {
            padding: 60px 0;
        }

        section .section-title {
            text-align: center;
            color: #007b5e;
            margin-bottom: 50px;
            text-transform: uppercase;
        }
        #tabs{
            background: #272723;
            color: #eee;
        }
        #tabs h6.section-title{
            color: #eee;
        }

        #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            color: #f3f3f3;
            background-color: transparent;
            border-color: transparent transparent #f3f3f3;
            border-bottom: 4px solid !important;
            font-size: 20px;
            font-weight: bold;
        }
        #tabs .nav-tabs .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
            color: #eee;
            font-size: 20px;
        }
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">

    </script>
@endsection

@section('content')


    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin_home')}}">Home</a></li>
            <li class="breadcrumb-item active">Edit Settings       </li>
        </ul>
    </div>

        <div  class="block" >
            <h6 class="section-title h1">Settings</h6>
            <div >
                <div >
                    <form action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                <div class="col-xs-12 ">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-general-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-general" aria-selected="true">General</a>
                            <a class="nav-item nav-link" id="nav-smtp-tab" data-toggle="tab" href="#nav-smtp" role="tab" aria-controls="nav-smtp" aria-selected="false">Smtp</a>
                            <a class="nav-item nav-link" id="nav-socialmedia-tab" data-toggle="tab" href="#nav-socialmedia" role="tab" aria-controls="nav-socialmedia" aria-selected="false">Social Media</a>
                            <a class="nav-item nav-link" id="nav-aboutus-tab" data-toggle="tab" href="#nav-aboutus" role="tab" aria-controls="nav-aboutus" aria-selected="false">About Us</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                            <a class="nav-item nav-link" id="nav-references-tab" data-toggle="tab" href="#nav-references" role="tab" aria-controls="nav-references" aria-selected="false">References</a>
                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">

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
                        </div>
                        <div class="tab-pane fade" id="nav-smtp" role="tabpanel" aria-labelledby="nav-smtp-tab">
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
                        </div>
                        <div class="tab-pane fade" id="nav-socialmedia" role="tabpanel" aria-labelledby="nav-socialmedia-tab">
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
                        </div>
                        <div class="tab-pane fade" id="nav-aboutus" role="tabpanel" aria-labelledby="nav-aboutus-tab">
                            <div class="form-group">
                                <label class="form-control-label">About Us</label>
                                <input id="aboutus" name="aboutus" value="{{$data->aboutus}}" class="form-control">
                            </div>

                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="form-group">
                                <label class="form-control-label">Contact</label>
                                <input id="contact" name="contact" value="{{$data->contact}}" class="form-control">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-references" role="tabpanel" aria-labelledby="nav-references-tab">
                            <div class="form-group">
                                <label class="form-control-label">References</label>
                                <input  id="references" name="references" value="{{$data->references}}" class="form-control">

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
                            </div>
                        </div>
                        </div>
                    </div>
                        <div class="form-group">
                            <input type="submit" value="Update setting" class="btn btn-primary">
                        </div>
                    </form>

                </div>
                </div>
            </div>




@endsection
