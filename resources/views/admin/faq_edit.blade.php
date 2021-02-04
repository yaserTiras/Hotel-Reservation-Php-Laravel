
@extends('layouts.admin')

@section('title','Edit FAQ')
@section('javascript')
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>

@endsection

@section('content')


    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin_home')}}">Home</a></li>
            <li class="breadcrumb-item active">Edit FAQ  </li>
        </ul>
    </div>

    <div class="col-lg-12">
        <div class="block">
            <div class="block-body">

                <form action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label class="form-control-label">Position</label>
                        <input type="number" name="position" value="{{$data->position}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Question</label>
                        <input type="text" name="question" value="{{$data->question}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Answer</label>
                       <textarea  id="answer" name="answer" class="form-control">{{$data->answer}}</textarea>

                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#answer' ) )
                                .then( answer => {
                                    console.log( answer );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
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


                    <div class="form-group">
                        <input type="submit" value="Update FAQ" class="btn btn-primary">
                    </div>


                </form>
            </div>
        </div>
    </div>


@endsection
