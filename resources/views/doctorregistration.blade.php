{{-- @extends('layout')
<style>

</style>
@section('content')
  <section id="header" class="d-flex align-items-center">
    <div class='container-fluid nav_bg'>
        <div class='row home_row'>
            <div class='col-12 mx-auto'>
            <div class="row home_row">
              <div class="col-md-6 pt-lg-0 order-2 order-lg-1 d-flex justify-content-center align-items-center flex-column pt-2">
                <form data="norepeat" class="booking-form mb-2" action="{{route('doctorReg')}}" method="POST" enctype="multipart/form-data">
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
                      <label for="inputAddress">email</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputAddress" placeholder="Your Gmail" name="email">
                      <span class="text-danger">
                        @error('email')
                            {{$message}}
                        @enderror
                        </span>
                    </div>

                    <div class="form-group mb-2">
                      <label for="inputAddress">Degree</label>
                      <input type="text" class="form-control @error('degree') is-invalid @enderror" id="inputAddress" placeholder="Qualification" name="degree">
                      <span class="text-danger">
                        @error('degree')
                            {{$message}}
                        @enderror
                        </span>
                    </div>

                    <div class="form-group mb-2">
                      <label for="inputAddress">expertise</label>
                      <input type="text" class="form-control @error('expertise') is-invalid @enderror" id="inputAddress" placeholder="expertise field" name="expertise">
                      <span class="text-danger">
                        @error('expertise')
                            {{$message}}
                        @enderror
                        </span>
                    </div>

                    <div class="form-group mb-2">
                        <label for="inputAddress">Work Location</label>
                        <input type="text" class="form-control @error('hospital') is-invalid @enderror" id="inputAddress" placeholder="hospital Name" name="hospital">
                        <span class="text-danger">
                          @error('hospital')
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
                          <label for="inputState">exprience year</label>
                          <select id="inputState" class="form-control @error('exprience') is-invalid @enderror" name="exprience">
                            <option selected>Choose...</option>
                            <option value="1">>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="10">6<</option>
                          </select>
                          <span class="text-danger">
                            @error('exprience')
                                {{$message}}
                            @enderror
                            </span>
                        </div>
                      </div>
                    <div class="form-group mb-2">
                        <label for="exampleFormControlTextarea1">About Yourself</label>
                        <textarea class="form-control @error('about') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="about"></textarea>
                        <span class="text-danger">
                          @error('about')
                              {{$message}}
                          @enderror
                          </span>
                      </div>

                      <div class="form-group mb-2">
                        <label for="exampleFormControlTextarea1">select img</label>
                        <input type="file" class="form-control @error('img') is-invalid @enderror" name="img"></textarea>
                        <span class="text-danger">
                          @error('img')
                              {{$message}}
                          @enderror
                          </span>

                          @if($message = Session::get('success'))
                          <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>{{ $message }}</strong>
                          </div>
                          <img src="images/upload/{{ \Session::get('img') }}">
                        @endif

                      </div>

                    <button type="submit" class="btn btn-primary w-50 mt-2">submit</button>
                  </form>
            </div>

                <div class="col-lg-6 order-1 order-lg-2 mb-4 d-flex justify-content-between align-items-center">
                    <img src="images/doctor-1.jpg" alt="home img"clss="doctor-registration-img" style="height:30rem; width:30rem; border-radius:50%; background-color:rgb(87, 87, 253); margin-left:2rem"/>
                </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection --}}


@extends('layout')
<style>

</style>
@section('content')
<div class="doctor-container h-100 w-100">
  <div class="container d-flex flex-row flex-wrap">
    <div class="image-controller flex-6">
      <img src="images/doctor-1.jpg" alt="home img"clss="doctor-registration-img" style="height:30rem; width:30rem; border-radius:50%; background-color:rgb(87, 87, 253); margin-left:2rem"/>
    </div>
    <div class="registration-container flex-6">
      <form data="norepeat" class="booking-form mb-2" action="{{route('doctorReg')}}" method="POST" enctype="multipart/form-data">
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
          <label for="inputAddress">email</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputAddress" placeholder="Your Gmail" name="email">
          <span class="text-danger">
            @error('email')
                {{$message}}
            @enderror
            </span>
        </div>

        <div class="form-group mb-2">
          <label for="inputAddress">Degree</label>
          <input type="text" class="form-control @error('degree') is-invalid @enderror" id="inputAddress" placeholder="Qualification" name="degree">
          <span class="text-danger">
            @error('degree')
                {{$message}}
            @enderror
            </span>
        </div>

        <div class="form-group mb-2">
          <label for="inputAddress">expertise</label>
          <input type="text" class="form-control @error('expertise') is-invalid @enderror" id="inputAddress" placeholder="expertise field" name="expertise">
          <span class="text-danger">
            @error('expertise')
                {{$message}}
            @enderror
            </span>
        </div>

        <div class="form-group mb-2">
            <label for="inputAddress">Work Location</label>
            <input type="text" class="form-control @error('hospital') is-invalid @enderror" id="inputAddress" placeholder="hospital Name" name="hospital">
            <span class="text-danger">
              @error('hospital')
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
              <label for="inputState">exprience year</label>
              <select id="inputState" class="form-control @error('exprience') is-invalid @enderror" name="exprience">
                <option selected>Choose...</option>
                <option value="1">>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="10">6<</option>
              </select>
              <span class="text-danger">
                @error('exprience')
                    {{$message}}
                @enderror
                </span>
            </div>
          </div>
        <div class="form-group mb-2">
            <label for="exampleFormControlTextarea1">About Yourself</label>
            <textarea class="form-control @error('about') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="about"></textarea>
            <span class="text-danger">
              @error('about')
                  {{$message}}
              @enderror
              </span>
          </div>

          <div class="form-group mb-2">
            <label for="exampleFormControlTextarea1">select img</label>
            <input type="file" class="form-control @error('img') is-invalid @enderror" name="img"></textarea>
            <span class="text-danger">
              @error('img')
                  {{$message}}
              @enderror
              </span>

              @if($message = Session::get('success'))
              <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{ $message }}</strong>
              </div>
              <img src="images/upload/{{ \Session::get('img') }}">
            @endif

          </div>

        <button type="submit" class="btn btn-primary w-50 mt-2">submit</button>
      </form>
    </div>
  </div>
</div>
@endsection
