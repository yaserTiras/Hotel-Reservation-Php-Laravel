
@extends('layouts.admin')

@section('title','Add FAQ')

      <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>

@section('content')


    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin_home')}}">Home</a></li>
            <li class="breadcrumb-item active">Add Faq        </li>
        </ul>
    </div>

    <div class="col-lg-12">
        <div class="block">
            <div class="title"><strong class="d-block">Add Faq</strong><span class="d-block"></span></div>
            <div class="block-body">
                <form action="{{route('admin_faq_store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label class="form-control-label">Position</label>
                        <input type="number"  name="position" value="0" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Question</label>
                        <input type="text"  name="question" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Answer</label>
                        <textarea  id="answer" name="answer" class="form-control"> </textarea>
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
                                <option>False</option>
                                <option>True</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <input type="submit" value=" ADD " class="btn btn-primary">
                    </div>

                </form>
            </div>
        </div>
    </div>


@endsection
