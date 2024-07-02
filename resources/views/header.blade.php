{{-- @extends('layout')

@section('content') --}}

<style>

</style>

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
    {{-- <li class="nav-item">
      <a class="nav-link" activeclassName='active_menu' href="#service_section">Service</a>
    </li> --}}
    <li class="nav-item">
      <a class="nav-link" activeclassName='active_menu' href="/booking">Appointment</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" activeclassName='active_menu' href="/about">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" activeclassName='active_menu' href="/contact">Contact Us</a>
    </li>
    </ul>
  
    <form class="form-inline">
      @guest
          <!-- User is not authenticated -->
          <a href="{{ route('login') }}"><button type="button" class="btn btn-primary btn-sm">Login</button></a>
      @else
          <!-- User is authenticated -->
          <div class="dropdown">
            <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="uil uil-user"></i> {{ Auth::user()->name }}
            </button>
            <ul class="dropdown-menu" aria-labelledby="userDropdown" style="width:300px; padding: 10px; margin-left:-9rem; margin-top:1rem;">
              <li>user-type : {{Auth::user()->role}}</li>
                <li>email : {{Auth::user()->email}}</li>
                <li>Phone: {{Auth::user()->phone}}</li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                       <i class="uil uil-signout"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    @endguest
  </form>

  <!-- Logout form -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>

</div>
</div>
</nav>
 
</div>
</div>
</div>
{{-- @endsection --}}