<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="/bootstrap-5.3.2-dist/css/bootstrap.css" rel="stylesheet"> --}}
    @include('cdn')
    <link rel="stylesheet" href="{{'/css/style.css'}}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>@yield('title','Laravel Medicure')</title>
</head>
<body>



    {{-- <div class='container-fluid nav_bg'>
        <div class='row'>
            <div class='col-12 mx-auto nav_div'>
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
    <a class="navbar-brand main-title" to="/">Medi + <span class="cure">Cure</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" activeclassName='active_menu' aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" activeclassName='active_menu' href="#service_section">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" activeclassName='active_menu' href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" activeclassName='active_menu' href="/contact">Contact Us</a>
        </li>
        </ul>
      
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
    </div>
    </nav>
     
    </div>
    </div>
    </div> --}}







        @yield('content')

        
    {{-- <script src="/bootstrap-5.3.2-dist/js/bootstrap.js"></script>  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script> --}}
    

</body>
</html>