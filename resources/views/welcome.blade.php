        {{-- @extends('header') --}}
@extends('layout')
{{-- @section('content') --}}
@include('header')
{{-- @endsection --}}
@section('content')
   <section id="header" class="d-flex align-items-center">
    <div class='container-fluid nav_bg'>
        <div class='row home_row'>
            <div class='col-12 mx-auto'>
            <div class="row home_row">
                <div class="col-md-6 pt-lg-0 order-2 order-lg-1 d-flex justify-content-center align-items-center flex-column pt-2">
                    <h1>Connect You With our <strong class="brand-name">medi + <span class="cure">CUre</span></strong></h1>
                    <h2 class="my-3 px-2">
                        We are a medical shop & clinic and have Full medical service for You
                    </h2>
                    <div class="mt-3">
                        <a href='#service_section' class="btn-get-started">get Started</a>
                    </div>
                </div>

                <div class="col-lg-6 order-1 order-lg-2 main-img">
                    <img src="images/w-b-1.png" class="animated" alt="home img" />
                </div>
                </div>
            </div>
        </div>
    </div>
    </section>


    <div class="service-heading">
        <h1>Our medical Service</h1>
    </div>
    <section id='service_section'>
        @include('service')
    </section>

    {{-- <div class="doctor-slide">
        <h1>Meet our Doctor</h1>
    </div>
    <section>
        @include('carousel')
    </section> --}}
    <div class="doctor-slide">
        <h1>Book Your Appointment</h1>
    </div>
    <section>
        @include('booking')
    </section>

        @include('footer')

   
@endsection
   