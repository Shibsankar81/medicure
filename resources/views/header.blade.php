{{-- @extends('layout') --}}

{{-- @section('content') --}}

  <div class='container-fluid nav_bg'>
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
      <a class="nav-link" activeclassName='active_menu' href="#booking">Appointment</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" activeclassName='active_menu' href="/about">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" activeclassName='active_menu' href="/contact">Contact Us</a>
    </li>
    </ul>
  
    <form class="form-inline">
      <a href="/login"><button type="button" class="btn btn-primary btn-sm">login</button></a>
    </form>
</div>
</div>
</nav>
 
</div>
</div>
</div>
{{-- @endsection --}}