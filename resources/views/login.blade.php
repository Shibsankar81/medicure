{{-- @include('header') --}}
@extends('layout')
@include('header')
@section('content')
<div class="login_div">

    <div class="my-2">
        <h1 class="text-center contact">log in</h1>
</div>
   
         <div class="container-fluid">
             <div class="row mb-3">
                 <div class="col-md-4 col-10 mx-auto login_box">
                 <form class="login-form" action="{{route('login')}}" method="POST">
                  @csrf
                 @if(Session::has('error'))
                  <div class="alert alert-danger border-none" role="alert">
                      {{ Session::get('error') }}
                  </div>
              @endif
                       <div class="form-group mb-4">
                         <label for="exampleFormControlInput1" class="mb-2 contact_label">Email address</label>
                         <input type="email" class="form-control contact_input" placeholder="abc@gmail.com" name="email" />
                         <span class="text-danger">
                          @error('email')
                                {{$message}}
                          @enderror
                         </span>
                       </div>
                       <div class="form-group mb-4">
                         <label for="exampleFormControlInput1" class="mb-2 contact_label">password</label>
                         <input type="password" class="form-control contact_input" placeholder="Password" name="password"/>
                         <span class="text-danger">
                          @error('password')
                                {{$message}}
                          @enderror
                         </span>
                       </div>

                       <button type="submit" class="btn btn-primary contact_btn">log in</button><br>
                       {{-- <a ><button type="button" class="btn btn-secondary btn-sm alert alert-success">register</button></a> --}}
                       <p style="text-align: center; margin-top:20px">If You have not Registered yet ! <a href="/register">Register</a> here.</p>
                   </form>

                 </div>
             </div>
         </div>
         

  @include('footer')
  @endsection