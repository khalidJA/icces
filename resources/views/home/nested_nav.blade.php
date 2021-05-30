
    <!-- Level one dropdown -->
    <li class="nav-item dropdown">
        <a id="dropdownMenu{{ $link->id }}" href="{{ process_link($link->id) }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">  {{ $link->title }}</a>
        <ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0 shadow">
            @foreach ($link->links as $link)
            @if ($link->links->count()>0)
            @include('home.sub_nested_nav')
            @else
            <li><a href="{{ process_link($link->id) }}" class="dropdown-item">{{ $link->title }}  </a></li>  
            <li class="dropdown-divider"></li>
            @endif
           
        @endforeach
        
       
  
        
  
  
        </ul>
      </li>
      <!-- End Level one -->