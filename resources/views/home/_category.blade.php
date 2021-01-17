@php
    $parentcategories=\App\Http\Controllers\HomeController::categorylist()
@endphp

<li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Categories<b class="caret"></b></a>
    <ul class="dropdown-menu megamenu">

        <li>
            <div class="row">
                @foreach($parentcategories as $rs)
                <div class="col-md-6 col-lg-3">
                    <a>{{$rs->title}}</a>
                    <ul class="list-unstyled mb-3">
                        <li class="nav-item"><a href="category.html" class="nav-link">
                                @if(count($rs->children))
                                    @include('home.categorytree',['children'=>$rs->children])
                                @endif

                            </a></li>
                    </ul>
                </div>
                @endforeach
            </div>
        </li>

    </ul>
</li>
