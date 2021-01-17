@foreach($children as $subcategory)
    <ul class="nav-item dropdown menu-large">
        @if (count($subcategory->children))
            <li class="nav-item">{{$subcategory->title}}</li>

            <ul class="list-unstyled mb-6">
                @include('home.categorytree',['children'=>$subcategory->children]);
            </ul>
        @else
        <li><a href="#">{{$subcategory->title}}</a> </li>
        @endif
    </ul>
@endforeach
