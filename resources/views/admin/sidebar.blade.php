<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">pro sidebar</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>

      <div class="sidebar-menu">
        <ul>
            <li class="header-menu">
                <span>Main Contents</span>
              </li>
            @foreach ($main_contents as $content)
            <li>
                <a href="{{ route('rcontents.index',$content->id) }}">
                  <i class="fa fa-tachometer-alt"></i>
                  <span>{{ $content->title }} </span>
                
                </a>
            </li>
         
            @endforeach
       
            <li>
                <a href="{{ route('committees.index') }}">
                  <i class="fa fa-tachometer-alt"></i>
                  <span>Committees </span>
                
                </a>
            </li>
            <li>
                <a href="{{ route('register.index') }}">
                  <i class="fa fa-tachometer-alt"></i>
                  <span>Registered Users </span>
                
                </a>
            </li>
            <li>
                <a href="{{ route('contact.index') }}">
                  <i class="fa fa-tachometer-alt"></i>
                  <span> Incomming Messages </span>
                
                </a>
            </li>
            <li>
                <a href="{{ route('settings.edit',1) }}">
                  <i class="fa fa-tachometer-alt"></i>
                  <span>Settings </span>
                
                </a>
            </li>
        

        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    {{-- <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="#">
        <i class="fa fa-power-off"></i>
      </a>
    </div> --}}
  </nav>
  <!-- sidebar-wrapper  -->