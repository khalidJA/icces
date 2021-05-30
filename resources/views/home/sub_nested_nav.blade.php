        <!-- Level two dropdown-->
        <li class="dropdown-submenu">
            <a id="dropdownMenu{{ $link->id }}" href="{{ process_link($link->id) }}" role="button" data-toggle="dropdown" 
                aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">{{ $link->title }}</a>
            <ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
                @foreach ($link->links as $link)
                    @if ($link->links->count()>0)
                        @include('home.sub_nested_nav')
                    @else
                    <li>
                        <a tabindex="-1" href="{{ process_link($link->id) }}" class="dropdown-item">{{ $link->title }}</a>
                      </li>
                    @endif
                @endforeach
            </ul>
            </li>
{{--      
  
              <!-- Level three dropdown-->
              <li class="dropdown-submenu">
                <a id="dropdownMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                <ul aria-labelledby="dropdownMenu3" class="dropdown-menu border-0 shadow">
                  <li><a href="#" class="dropdown-item">3rd level</a></li>
                  <li><a href="#" class="dropdown-item">3rd level</a></li>
                </ul>
              </li>
              <!-- End Level three -->
  
              <li><a href="#" class="dropdown-item">level 2</a></li>
              <li><a href="#" class="dropdown-item">level 2</a></li>
         
    
          <!-- End Level two --> --}}