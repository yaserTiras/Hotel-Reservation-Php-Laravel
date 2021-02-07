@php
    $userRoles = Auth::user()->roles->pluck('name');
@endphp
<div class="card sidebar-menu">
    <div class="card-header">
        <h3 class="h4 card-title">Customer section</h3>
    </div>
    @auth
    <div class="card-body">
        <ul class="nav nav-pills flex-column">
            <a href="{{route('myprofile')}}" class="nav-link">
                <i class="fa fa-user"></i> My account
            </a>
            @if ($userRoles->contains('admin'))
                <a href="{{route('user_hotels')}}" class="nav-link">
                    <i class="fa fa-list"></i> My Hotels
                </a>
            @endif
            <a href="{{route('user_shopcart')}}" class="nav-link">
                <i class="fa fa-list"></i> Rezervation
            </a>
            <a href="{{route('user_reservation')}}" class="nav-link">
                <i class="fa fa-list"></i> My Bookings
            </a>

            @if ($userRoles->contains('admin'))
                <a href="{{route('admin_home')}}" class="nav-link">
                    <i class="fa fa-list"></i> Admin Panel
                </a>
            @endif
        </ul>
    </div>
        @endauth
</div>
