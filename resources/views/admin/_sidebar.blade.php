
<!-- Sidebar Navigation-->
<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar">
            @if (Auth::user()->profile_photo_path)
                <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" class="img-fluid rounded-circle">
            @endif
                </div>
        <div class="title">





            <div class="info">
                @auth
                    <a  class="d-block">{{ Auth::user()->name }}</a>

                @endauth

            </div>



        </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
        <li class="active"><a href="{{ route('admin_home')}}"> <i class="icon-home"></i>Home </a></li>
        <li><a href="{{ route('admin_category') }}"> <i class="icon-padnote"></i> Category  </a></li>



        <li><a href="{{route('admin_hotels')}}"> <i class="icon-grid"></i> Hotel </a></li>
        <li><a href="{{route('admin_setting')}}"> <i class="icon-grid"></i> Setting </a></li>
        <li><a href="{{ route('admin_message') }}"> <i class="icon-padnote"></i>Messages </a></li>
        <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Reservation Order </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="{{ route('admin_reservation') }}">Reservation</a></li>
                <li><a href="{{ route('admin_reservation_list',['status'=>'accepted']) }}">Accepted Reservation</a></li>
                <li><a href="{{ route('admin_reservation_list',['status'=>'New']) }}">New Reservation</a></li>
                <li><a href="{{ route('admin_reservation_list',['status'=>'completed']) }}">Completed Reservation</a></li>
                <li><a href="{{ route('admin_reservation_list',['status'=>'canceled']) }}">Canceled Reservation</a></li>
            </ul>
        </li>
        <li><a href="{{ route('admin_faq') }}"> <i class="icon-padnote"></i>FAQ </a></li>
        <li><a href="{{ route('admin_users') }}"> <i class="icon-padnote"></i>Users </a></li>
        <li><a href="{{ route('admin_logout') }}"> <i class="icon-logout"></i>Logout </a></li>


</nav>
<!-- Sidebar Navigation end-->
