@extends('layout')
@include('header')

@section('content')
    <div class="mt-3 contact_div">


        <div class="my-5">
            <h1 class="text-center contact">Contact form</h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-10 mx-auto contact_form">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action={{ route('contact') }} method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1" class="mb-2 contact_label">User Name</label>
                            <input type="text" name="name"
                                class="form-control contact_input @error('name') is-invalid @enderror"
                                id="exampleFormControlInput1" placeholder="full Name" />
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1" class="mb-2 contact_label">Email address</label>
                            <input type="email" name="email"
                                class="form-control contact_input @error('email') is-invalid @enderror"
                                id="exampleFormControlInput1" placeholder="abc@gmail.com" />
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1" class="mb-2 contact_label">Mobile No</label>
                            <input type="text" name="phone"
                                class="form-control contact_input @error('phone') is-invalid @enderror"
                                id="exampleFormControlInput1" placeholder="phone No" />
                            <span class="text-danger">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group mb-4">
                            <label for="exampleFormControlTextarea1" class="mb-2 contact_label">Message</label>
                            <textarea class="form-control contact_input @error('message') is-invalid @enderror" name="message"
                                id="exampleFormControlTextarea1" rows="3" placeholder="Write here"></textarea>
                            <span class="text-danger">
                                @error('message')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <button type="submit" class="btn btn-primary contact_btn mb-4">submit</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-lg-12 my-3">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14733.062174706065!2d87.71310564525126!3d22.606557030614397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02a786b8083c8b%3A0x23bd4d6612d65232!2sDaspur%2C%20West%20Bengal%20721211!5e0!3m2!1sen!2sin!4v1701954287482!5m2!1sen!2sin"
                class="w-100" height="400" allowfullscreen="" loading="lazy"></iframe>
            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14733.062174706065!2d87.71310564525126!3d22.606557030614397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02a786b8083c8b%3A0x23bd4d6612d65232!2sDaspur%2C%20West%20Bengal%20721211!5e0!3m2!1sen!2sin!4v1701954287482!5m2!1sen!2sin" width="w-100" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
        </div>
    </div>


    @include('footer')
@endsection
