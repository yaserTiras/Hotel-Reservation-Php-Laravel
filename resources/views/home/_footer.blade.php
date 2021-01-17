<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <h4 class="mb-3">Contact</h4>
                <ul class="list-unstyled">
                    <li><strong>Phone : </strong>{{$setting->phone}}</li>
                    <li><strong>Fax : </strong>{{$setting->fax}}</li>
                    <li><strong>Email : </strong>{{$setting->email}}</li>
                </ul>

            </div>
            <!-- /.col-lg-3-->

            <!-- /.col-lg-3-->
            <div class="col-lg-3 col-md-6">
                <h4 class="mb-3">Where to find us</h4>
                <p><strong>Address.</strong><br>{{$setting->company}}<br>{{$setting->address}}</p>
                <hr class="d-block d-md-none">
            </div>
            <!-- /.col-lg-3-->
            <div class="col-lg-3 col-md-6">
                <h4 class="mb-3">Stay in touch</h4>
                <p class="social"> @if ($setting->facebook != null)<a href="{{$setting->facebook}}" class="facebook external"><i class="fa fa-facebook"></i></a>@endif
                    @if ($setting->twitter != null) <a href="{{$setting->twitter}}" class="twitter external"><i class="fa fa-twitter"></i></a>@endif
                    @if ($setting->instagram != null) <a href="{{$setting->instagram}}" class="instagram external"><i class="fa fa-instagram"></i></a>@endif

                   <!-- <a href="#" class="gplus external"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="email external"><i class="fa fa-envelope"></i></a>    --></p>
            </div>
            <!-- /.col-lg-3-->
        </div>
        <!-- /.row-->
    </div>
    <!-- /.container-->
</div>
<!-- /#footer-->
<!-- *** FOOTER END ***-->


<!--
*** COPYRIGHT ***
_________________________________________________________
-->
<div id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-2 mb-lg-0">
                <p class="text-center text-lg-left">©2019  {{$setting->company}}.</p>
            </div>
            <div class="col-lg-6">
                <p class="text-center text-lg-right">Template design by <a href="https://bootstrapious.com/">Bootstrapious</a>
                    <!-- If you want to remove this backlink, pls purchase an Attribution-free License @ https://bootstrapious.com/p/obaju-e-commerce-template. Big thanks!-->
                </p>
            </div>
        </div>
    </div>
</div>

