<div class="sidebar">
  @foreach ($sidebar as $item)
     @if ($item->sub_contents_id>0)
     @if(strip_tags($item->contents->content)=='fb')
     <div class="card material ">
       <div class="content-title">
         <div class="text">{{ $item->contents->title }}</div>
       </div>
     <div class="card-body text-center">
      <div class="fb-page" data-href="https://www.facebook.com/icces2020/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/icces2020/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/icces2020/">‏‎First International Conference on Computing and Emerging Sciences‎‏</a></blockquote></div>

     </div>
      </div>
     @elseif(strip_tags($item->contents->content)=='count down' || strip_tags($item->contents->content)=='countdown')
     <div class="card material my-2">
       <div class="content-title">
         <div class="text">{{ $item->title }}</div>
       </div>
       <div class="card-body">
         <div id="countdown" data-time="Sep 24, 2021 00:00:00">
           <ul>
             <li><span id="days"></span>days</li>
             <li><span id="hours"></span>Hours</li>
             <li><span id="minutes"></span>Minutes</li>
             <li><span id="seconds"></span>Seconds</li>
           </ul>
         </div>
       </div>
     </div>
     @elseif ($item->contents->title=='!title')
     <div class="card material my-2">
      <div class="card-body p-2">{!! $item->contents->content !!}</div>
    </div>
@elseif($item->contents->content==null || $item->contents->content=='' || $item->contents->content=='<p></p>')

<div class="title">
  <h4 class="text">{{ $item->contents->title }}</h4>
      </div>
     @else
     <div class="card material my-2">
      <div class="content-title">
        <div class="text">{{ $item->contents->title }}</div>
      </div>
      <div class="card-body p-2">{!! $item->contents->content !!}</div>
    </div> 
     @endif
 @else
 <div class="menu">
  <div class="card material">
@if ($item->menus->title!='!title')
<div class="title">
  <h4 class="text">{{ $item->menus->title }}</h4>
      </div>

@endif
@if ($item->menus->links->count()>0)
<div class="card-body">
  <ul class="list-group tree">

    @foreach ($item->menus->links as $link)
        @if ($link->links->count()>0)
            @include('home.menu_links')
        @else
        <li class="list-group-item link-item"><a href="{{ process_link($link->id) }}" class="link-list">{{ $link->title }}</a></li> 
        @endif
    @endforeach

  </ul>
</div> 
@endif


</div>
    </div>

     @endif 
  @endforeach
  
 



 




</div>