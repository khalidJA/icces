<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrator DashBoard ACM 2021</title>
    @notifyCss
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
</head>
<body>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
          <i class="fas fa-bars"></i>
        </a>
    @include('admin.sidebar')
        <main class="page-content">
          <div class="container">
            <h2>2 <sup>nd</sup> International Conference on Computing and Emerging Sciences</h2>
            <hr>
          
        @yield('content')
      
            <footer class="text-center">
              <div class="mb-2">
                <small>
                  © 2021 made with <i class="fa fa-heart" style="color:red"></i> by - <a target="_blank" rel="noopener noreferrer" href="https://www.ss-iq.net/">
                   Systems Solutions Institute
                  </a>
                </small>
              </div>
      
              <div>
             
              </div>
            </footer>
      
          </div>
      
        </main>
        <!-- page-content" -->
      </div>
      <div style="height: 600px;">
        <div id="fm"></div>
    </div>
      @include('notify::messages')
      <!-- page-wrapper -->
          @notifyJs
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/esm/popper.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.js"></script>
<script src="{{ asset('vendor/ckeditor4/ckeditor.js') }}"></script>
<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
@notifyJs
      <script>
       $(function(){

        CKEDITOR.replace( 'editor' ,{
            height:600,
            filebrowserImageBrowseUrl: '/file-manager/ckeditor'
        });
       })
          $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});


      </script>
</body>
</html>