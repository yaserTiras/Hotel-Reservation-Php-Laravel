
@php
    $i=0;
@endphp
@foreach($slider as $rs)


    @php
        $i+=1;
    @endphp
    <div class="container">
        <div class="row">
            <div class="col-md-12" >
                <div id="main-slider" class="owl-carousel owl-theme @if($i>=0)  active @endif" >

                    <div class="item">

                        <a href="" >
                            <img src="{{Storage::url($rs->image) }}" alt="{{$rs->title}}"  class="img-fluid "  >
                        </a>
                    </div>
                </div>
                <!-- /#main-slider-->
            </div>
        </div>
    </div>
@endforeach
