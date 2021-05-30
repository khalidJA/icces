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
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v10.0" nonce="SDdm2jdD"></script>

<div class="top-page">
 
  @include('home.header')
@include('home.navbar')

</div>

<div class=" middle-page">

<div class="about-section card ">
  <div class="container">
     <h2 class="website-name-about">{{ settings()->name }}</h2>
     {!! settings()->about !!}
  </div>
</div>

  <div class="search-container m-auto">
 
    <form action="{{ route('search') }}" method="POST" style="text-align: center">
      {{ csrf_field() }}
      <div class="group">
        <input type="text" class="inp" name="q" required="required"/><span class="highlight"></span><span class="bar"></span>
        <label>Write Keyword Which you want</label>
      </div>
      <button class="btn btn-submit search-button m-auto w-50" type="submit">Search</button>
    </form>
  </div>
<div class=" content-middle m-auto">
<div class="row">

  <div class="col-md-8">
@yield('content')
  </div>


  <div class="col-md-4">
@include('home.sidebar')
  </div>

</div>
</div>


</div>

<div class="bottom-page">
<div class="container">

@include('home.footer')

</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
  $(function () {
    if($('#scroll').length>0){
    $('html, body').animate({
  scrollTop: $("#scroll").offset().top
});
  }
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
    const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  let birthday = $('#countdown').data('time'),
      countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        let now = new Date().getTime(),
            distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
          let headline = document.getElementById("headline"),
              countdown = document.getElementById("countdown"),
              content = document.getElementById("content");

          headline.innerText = "It's my birthday!";
          countdown.style.display = "none";
          content.style.display = "block";

          clearInterval(x);
        }
        //seconds
      }, 0)
  });


</script>
@yield('script')
</body>
</html>

