
<!-- Sidebar Navigation-->
<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="{{ asset('assets') }}/admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
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
        <li><a href="{{ route('admin_reservation') }}"> <i class="icon-padnote"></i>Reservation </a></li>
        <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Example dropdown </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
            </ul>
        </li>
        <li><a href="{{ route('admin_login') }}"> <i class="icon-logout"></i>Login page </a></li>


</nav>
<!-- Sidebar Navigation end-->
