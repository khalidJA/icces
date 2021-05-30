<ul class="navbar-nav mr-auto">
    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">
        <i class="fas fa-home"></i>
        Home</a></li>
           @foreach ($nav as $link)
               @if ($link->links->count()>0)
                   @include('home.nested_nav')
                   @else
                   <li class="nav-item"><a href="{{ process_link($link->id) }}" class="nav-link">{{ $link->title }}</a></li>
               @endif
           @endforeach


  </ul>
