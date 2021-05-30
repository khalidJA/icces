<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ACM') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">


    <!-- Styles -->


    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>


<div class="top-page">
    <div class="tob-bar">

    </div>
    <div class="header">
        <div class="container header-content">
          <div class="row">
            <div class="col-md-8">
              {{-- <span class="line">
                <h2><span>ICCES2021</span></h2>
            </span>
              <h1 class="tracking-in-expand logo-text">
                Second International Conference on Computing and Emerging Sciences
                <div class="badge"></div>
              </h1> --}}
               <img src="{{ asset('imgs/logo-big-width.png') }}" style="height:200px;width:auto;" alt=""> 
            </div>
              <div class="col-md-4">
                <ul class="nav header-nav">
                    <li class="nav-item">
                      <a class="nav-link btn" href="#">
                        <i class="fas fa-user"></i>
                        Register</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link btn" href="#">
                        <i class="fas fa-envelope"></i>
                        Contact Us
                      </a>
                    </li>

                  </ul>
              </div>
             
          </div>
        </div>
    </div>
    <div class="navbar-container">
        <nav class="navbar navbar-expand-lg navbar-light  py-1 shadow-sm">
            <div class="container">
           
              <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
                        <span class="navbar-toggler-icon"></span>
                    </button>
          
          
              <div id="navbarContent" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                  <!-- Level one dropdown -->
                  <li class="nav-item dropdown">
                    <a id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                    <ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">Some action </a></li>
                      <li><a href="#" class="dropdown-item">Some other action</a></li>
          
                      <li class="dropdown-divider"></li>
          
                      <!-- Level two dropdown-->
                      <li class="dropdown-submenu">
                        <a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                        <ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
                          <li>
                            <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                          </li>
          
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
                        </ul>
                      </li>
                      <!-- End Level two -->
                    </ul>
                  </li>
                  <!-- End Level one -->
          
                  <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                  <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                  <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                </ul>
              </div>
            </div>
          </nav>
      
    </div>
</div>

<div class=" middle-page">

<div class="about-section card ">
  <div class="container">
     <h2 class="website-name-about">First International Conference on Computing and Emerging Sciences</h2>
  </div>
</div>

  <div class="search-container m-auto">
 
    <form action="" method="POST" style="text-align: center">
      {{ csrf_field() }}
      <div class="group">
        <input type="text" class="inp" required="required"/><span class="highlight"></span><span class="bar"></span>
        <label>Write Keyword Which you want</label>
      </div>
      <button class="btn btn-submit search-button m-auto w-50" type="submit">Search</button>
    </form>
  </div>
<div class=" content-middle m-auto">
<div class="row">

  <div class="col-md-8">

  
  
  <div class="contents">
<div class="card material">
  <div class="content-title">
    <div class="text">Title Of content Center</div>
  </div>
  <div class="card-body">Body Of content</div>
</div>
<div class="card material">
       
  <div class="card-body">Body Fo Content Wihtout Title</div>
</div>
  </div>


  </div>


  <div class="col-md-4">
    <div class="sidebar">
      <div class="card material my-2">
       
        <div class="card-body">Body Fo Content Wihtout Title</div>
      </div>

      <div class="card material my-2">
        <div class="content-title">
          <div class="text">Content With Title</div>
        </div>
        <div class="card-body">Body Fo Content</div>
      </div>

      <div class="title">
        <h4 class="text">Just Title</h4>
            </div>
      <div class="menu">
  <div class="card material">
    <div class="title">
      <h4 class="text">Menu List Links With Multi Level</h4>
          </div>
    <div class="card-body">
<ul class="list-group tree">
  <li class="list-group-item link-item"><a href="#" class="link-list branch">Hello</a>
  <ul class="tree">
    <li>
      <a href="#" class="link-list branch">Hello</a>
      <ul class="tree">
        <li>
          <a href="#" class="link-list branch">Hello</a>
          
        </li>
      </ul>
    </li>
  </ul>
  </li>
  <li class="list-group-item link-item"><a href="" class="link-list">Hello</a></li>
  <li class="list-group-item link-item"><a href="" class="link-list">Hello</a></li>
  <li class="list-group-item link-item"><a href="" class="link-list">Hello</a></li>
  <li class="list-group-item link-item"><a href="" class="link-list">Hello</a></li>
  <li class="list-group-item link-item"><a href="" class="link-list">Hello</a></li>
</ul>
    </div>
  </div>
      </div>
  
      <div class="content">
  
      </div>
  </div>
  </div>
</div>
</div>


</div>

<div class="bottom-page">
<div class="container">


<div class="footer">
<div class="footer-links">
  <h2>
    <i class="fas fa-globe"></i>
    Browse</h2>
<div class="row row-links">
<div class="col-md-3 col-links">
  <h3 class="title-footer-menu">
    <i class="fas fa-link"></i>
    Menu Title</h3>
  <ul class="list-group tree">
    <li class="list-group-item link-item"><a  class="link-list branch">Hello</a>
    <ul class="tree">
      <li>
        <a class="link-list branch">Hello</a>
        <ul class="tree">
          <li>
            <a  class="link-list branch">Hello</a>
            
          </li>
        </ul>
      </li>
    </ul>
    </li>
    <li class="list-group-item link-item"><a href="" class="link-list">Hello</a></li>
    <li class="list-group-item link-item"><a href="" class="link-list">Hello</a></li>
    <li class="list-group-item link-item"><a href="" class="link-list">Hello</a></li>
    <li class="list-group-item link-item"><a href="" class="link-list">Hello</a></li>
    <li class="list-group-item link-item"><a href="" class="link-list">Hello</a></li>
  </ul>



</div>
<div class="col-md-4"></div>
<div class="col-md-4"></div>
</div>
</div>

<div class="copyright">All Copyright Reserved &copy;2021</div>

</div>
</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
	$('.branch').click(function(){
     $(this).children().toggleClass('fa-folder-open-o');
		$(this).next().slideToggle();
    
	});



    $( ".dropdown-menu" ).css('margin-top',0);


  $("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
    event.preventDefault();
    event.stopPropagation();

    $(this).siblings().toggleClass("show");


    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
      $('.dropdown-submenu .show').removeClass("show");
    });

  });

</script>

</body>
</html>
