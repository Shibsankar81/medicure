@extends('layout')
@section('content')
    @include('header')

    <div class="container-fluid mb-3">
        <div class="row doctorrow">
            <div class="col-10 mx-auto">
                <div class="row gy-4 doctorlist">
                    {{-- @include('doctorcard') --}}

                    @foreach ($doctors as $doctor)
                        <div class="col-md-4 col-10 mx-auto">
                            <div class="card">
                                <img src="images/upload/{{ $doctor->img }}" class="card-img-top card-img"
                                    alt="{{ $doctor->img }}" style=""/>
                                <h2 class="doctor-card-title">{{ $doctor->name }}</h2>

                                <div class="mt-2 px-2 doctor-card">
                                    <span class="card-text py-2 specilization">{{ $doctor->expertise }}</span>
                                    <div class="doctor-card-star">
                                        <span class="doctor-card-star-span">
                                            <img src="images/star.jpg" class="star_img" />4.3
                                        </span>
                                        <span class="doctor-card-star-span">
                                            (1230)
                                        </span>
                                    </div>
                                </div>
                                <div class="doctor_card_patient">
                                    <div class="doctor_card_hospital">
                                        <h3 class="patient">+1400 patients</h3>
                                        <p class="hospital">At {{ $doctor->hospital }}</p>
                                    </div>
                                    <a to="/" class="doctor_card_link">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>



    @include('footer')
@endsection
