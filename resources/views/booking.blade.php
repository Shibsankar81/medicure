@extends('layout')
@section('content')
@include('header')

<section id="booking" class="d-flex align-items-center">
    <div class='container-fluid nav_bg'>
        <div class='row home_row'>
            <div class='col-12 mx-auto'>
            <div class="row home_row">
                <div class="col-md-6 pt-lg-0 order-2 d-flex justify-content-center align-items-center flex-column ">

                    <form data="norepeat" class="booking-form mb-2" action={{route('booking')}} method="POST">
                        @csrf
                        <div class="form-row d-flex gap-2">
                          <div class="form-group col-md-8 mb-2">
                            <label for="inputEmail4">name</label>
                            <input type="name" class="form-control @error('name') is-invalid @enderror" id="inputEmail4" placeholder="Full Name" name="name">
                            <span class="text-danger">
                              @error('name')
                                  {{$message}}
                              @enderror
                              </span>
                          </div>
                          
                          <div class="form-group col-md-4 mb-2">
                            <label for="inputPassword4">age</label>
                            <input type="age" class="form-control @error('age') is-invalid @enderror" id="inputPassword4" placeholder="age" name="age">
                            <span class="text-danger">
                              @error('age')
                                  {{$message}}
                              @enderror
                              </span>
                          </div>
                        </div>

                        <div class="form-group mb-2">
                          <label for="inputAddress">Address</label>
                          <input type="text" class="form-control @error('address') is-invalid @enderror" id="inputAddress" placeholder="Vill Name" name="address">
                          <span class="text-danger">
                            @error('address')
                                {{$message}}
                            @enderror
                            </span>
                        </div>

                        <div class="form-row d-flex gap-2 ">
                          <div class="form-group col-md-6 mb-2">
                            <label for="inputCity">Mobile No</label>
                            <input type="number" class="form-control @error('phone') is-invalid @enderror" id="inputCity" placeholder="mobile no" name="phone">
                            <span class="text-danger">
                              @error('phone')
                                  {{$message}}
                              @enderror
                              </span>
                          </div>
                          <div class="form-group col-md-4 mb-2">
                            <label for="inputState">Doctor</label>
                            <select id="inputState" class="form-control @error('doctor') is-invalid @enderror" name="doctor">
                              <option selected>Choose...</option>
                              @foreach($doctors as $doctor)
                                  <option value="{{ $doctor->name }}">{{ $doctor->name }}</option>
                              @endforeach
                            </select>
                            <span class="text-danger">
                                @error('doctor')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        </div>

                        <div class="form-group mb-2">
                            <label for="inputAddress">Select date</label>
                            <input type="date" class="form-control @error('date') is-invalid @enderror" id="inputAddress" placeholder="Vill Name" name="date">
                            <span class="text-danger">
                              @error('date')
                                  {{$message}}
                              @enderror
                              </span>
                          </div>


                        <div class="form-group mb-2">
                            <label for="exampleFormControlTextarea1">Explain your Disies</label>
                            <textarea class="form-control @error('problem') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="problem"></textarea>
                            <span class="text-danger">
                              @error('problem')
                                  {{$message}}
                              @enderror
                              </span>
                          </div>
                        <button type="submit" class="btn btn-primary w-50 mt-2">submit</button>
                      </form>
                </div>

                <div class="col-lg-6 order-1 booking-img">
                    @include('carousel')
                </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    @include('footer')
@endsection