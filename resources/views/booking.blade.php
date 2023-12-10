{{-- @extends('layout')
@section('content') --}}

<section id="booking" class="d-flex align-items-center">
    <div class='container-fluid nav_bg'>
        <div class='row home_row'>
            <div class='col-12 mx-auto'>
            <div class="row home_row">
                <div class="col-md-6 pt-lg-0 order-2 d-flex justify-content-center align-items-center flex-column ">
                    <form class="booking-form mb-2">
                        <div class="form-row d-flex gap-2">
                          <div class="form-group col-md-8 mb-2">
                            <label for="inputEmail4">name</label>
                            <input type="name" class="form-control" id="inputEmail4" placeholder="Full Name">
                          </div>
                          <div class="form-group col-md-4 mb-2">
                            <label for="inputPassword4">age</label>
                            <input type="age" class="form-control" id="inputPassword4" placeholder="age">
                          </div>
                        </div>
                        <div class="form-group mb-2">
                          <label for="inputAddress">Address</label>
                          <input type="text" class="form-control" id="inputAddress" placeholder="Vill Name">
                        </div>

                        <div class="form-row d-flex gap-2 ">
                          <div class="form-group col-md-6 mb-2">
                            <label for="inputCity">Mobile No</label>
                            <input type="number" class="form-control" id="inputCity" placeholder="mobile no">
                          </div>
                          <div class="form-group col-md-4 mb-2">
                            <label for="inputState">Doctor</label>
                            <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group mb-2">
                            <label for="inputAddress">Select date</label>
                            <input type="date" class="form-control" id="inputAddress" placeholder="Vill Name">
                          </div>


                        <div class="form-group mb-2">
                            <label for="exampleFormControlTextarea1">Explain your Disies</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                        <button type="submit" class="btn btn-primary w-50 mt-2">Sign in</button>
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
{{-- @endsection --}}