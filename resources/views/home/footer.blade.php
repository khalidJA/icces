<div class="footer">
    <div class="footer-links">
      <h2>
        <i class="fas fa-globe"></i>
        Browse</h2>
    <div class="row row-links">
@foreach ($footer as $item)
<div class="col-md-3 col-links">
  <h3 class="title-footer-menu">
    <i class="fas fa-link"></i>
   {{ $item->title }}</h3>
  <ul class="list-group tree">
    @foreach ($item->links as $link)
    @if ($link->links->count()>0)
        @include('home.menu_links')
    @else
    <li class="list-group-item link-item"><a href="{{ process_link($link->id) }}" class="link-list">{{ $link->title }}</a></li> 
    @endif
@endforeach
    
  </ul>


</div>   
@endforeach
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    </div>
    </div>
    
    <div class="copyright">All Copyright Reserved &copy;2021</div>
    
    </div>