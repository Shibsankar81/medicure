{{-- @include('header') --}}
@extends('layout')
@include('header')
@section('content')
<div class="login_div">

    <div class="my-2">
        <h1 class="text-center contact">Registration here</h1>
</div>
   
         <div class="container-fluid">
             <div class="row mb-3">
                 <div class="col-md-4 col-10 mx-auto login_box">
                  @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div> 
                    @endif
                 <form class="login-form" action="{{route('register')}}" method="POST">
                  @csrf
                    <div class="form-group mb-2">
                        <label for="exampleFormControlInput1" class="mb-2 contact_label">Full Name</label>
                        <input type="name" class="form-control @error('name') is-invalid @enderror contact_input" placeholder="Full name" name="name"/>
                        <span class="text-danger">
                        @error('name')
                            {{$message}}
                        @enderror
                        </span>
                    </div>

                       <div class="form-group mb-2">
                         <label for="exampleFormControlInput1" class="mb-2 contact_label">Email address</label>
                         <input type="email" class="form-control @error('email') is-invalid @enderror contact_input" placeholder="abc@gmail.com" name="email"/>
                         <span class="text-danger">
                          @error('email')
                                {{$message}}
                          @enderror
                         </span>
                       </div>

                       <div class="form-group mb-2">
                        <label for="exampleFormControlInput1" class="mb-2 contact_label">Mobile No</label>
                        <input type="number" class="form-control @error('phone') is-invalid @enderror contact_input" placeholder="phone no" name="phone"/>
                        <span class="text-danger">
                         @error('phone')
                               {{$message}}
                         @enderror
                        </span>
                      </div>

                      <div class="form-group mb-2">
                        <label for="exampleFormControlInput1" class="mb-2 contact_label">village</label>
                        <input type="text" class="form-control @error('village') is-invalid @enderror contact_input" placeholder="village" name="village"/>
                        <span class="text-danger">
                         @error('village')
                               {{$message}}
                         @enderror
                        </span>
                      </div>

                       <div class="form-group mb-4">
                         <label for="exampleFormControlInput1" class="mb-2 contact_label">password</label>
                         <input type="password" class="form-control @error('password') is-invalid @enderror contact_input" placeholder="Password" name="password"/>
                         <span class="text-danger">
                          @error('password')
                                {{$message}}
                          @enderror
                         </span>
                       </div>

                       <button type="submit" class="btn btn-primary contact_btn">submit</button>
                   </form>

                 </div>
             </div>
         </div>
         

  @include('footer')
  @endsection