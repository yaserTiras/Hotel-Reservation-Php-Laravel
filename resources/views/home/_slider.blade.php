



<div class="container">

    <div class="row">

        <div class="col-md-12">

            <div id="main-slider" class="owl-carousel owl-theme">
                @foreach($slider as $rs)
                <div class="item">


                    <a href="{{route('hotel',['id'=>$rs->id])}}">

                    <img src="{{Storage::url($rs->image)}}"  style="height: 505px">
                    </a>
                    <div class="carousel-caption">
                        <h1 class="super-heading">{{$rs->title}}</h1>
                        <p class="super-paragraph">A multi-purpose Bootstrap template by Detayı Gör.</p>
                    </div>

                </div>

                @endforeach
            </div>

            <!-- /#main-slider-->
        </div>

    </div>

</div>
