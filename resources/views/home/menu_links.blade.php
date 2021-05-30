<li class="list-group-item link-item"><a href="{{ process_link($link->id) }}" class="link-list branch">{{ $link->title }}</a>
    <ul class="tree">
        @foreach ($link->links as $link)
     @if ($link->links->count()>0)
         @include('home.menu_links')
     @else
     <li>
        <a href="{{ process_link($link->id) }}" class="link-list branch">{{ $link->title }}</a>
     
      </li>
     @endif
        @endforeach

    </ul>
    </li>