<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="/stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title>
</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="{{ asset('images/medicine.jpg') }}" alt="Logo">
            </div>
            <span class="logo_name"><span style="color: blue">Medi</span>+<span style="color: red">Cure</span></span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#" id="dashboard">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dashboard</span>
                    </a></li>
                <li><a href="#patient-table" id="patient">
                        <i class="uil uil-user"></i>
                        <span class="link-name">Our Patients</span>
                    </a></li>
                <li><a href="#appointment-table" id="appointment">
                        <i class="uil uil-calendar-alt"></i>
                        <span class="link-name">Appointment Details</span>
                    </a></li>
                <li><a href="#add-new-doctor" id="add-doctor">
                        <i class="uil uil-stethoscope"></i>
                        <span class="link-name">Add Doctor</span>
                    </a></li>
                <li><a href="#doctor-table" id="doctor">
                        <i class="uil uil-user-md"></i>
                        <span class="link-name">Our Doctor</span>
                    </a></li>
                <li><a href="#message-table" id="message">
                        <i class="uil uil-comments"></i>
                        <span class="link-name">Message</span>
                    </a></li>
            </ul>

            <ul class="logout-mode">
                <li> <a href="#"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>
                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>

            <div>
                <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="userDropdown"
                    data-bs-toggle="dropdown" aria-expanded="false"
                    style="color:blue; border:1px solid red; padding:5px 10px 5px 10px">
                    <i class="uil uil-user"></i> {{ Auth::user()->name }}
                </button>
            </div>
            </form>
        </div>
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-user-md"></i>
                        <span class="text">Our Patients</span>
                        <span class="number">{{ $total_patients }}</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-stethoscope"></i>
                        {{-- <i class="fa fa-user-doctor"></i> --}}
                        <span class="text">Our Doctors</span>
                        <span class="number">{{ $total_doctors }}</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-calendar-alt"></i>
                        <span class="text">last week appointment</span>
                        <span class="number">{{ $total_appointments }}</span>
                    </div>

                    <div class="box box4">
                        <i class="uil uil-calendar-alt"></i>
                        <span class="text">Message</span>
                        <span class="number">{{ $total_message }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="activity">
            <div class="title">
                <i class="uil uil-clock-three"></i>
                <span class="text">Recent Activity</span>
            </div>

            @if (session('success'))
                <div
                    style="width:50%; text-align:center; background-color:rgb(0, 255, 4); padding: 10px; text-color:#fff; margin-inline:auto;">
                    {{ session('success') }}
                </div>
            @endif


            <div class="table-container" id="message-table">
                <h2
                    style="text-align: center; font-size:25px; color:blue; letter-spacing:5px; text-transform:uppercase; margin: 0rem 0 2rem 0">
                    Contact Messages</h2>
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile No</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($message as $index => $message)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->phone }}</td>
                                <td>{{ $message->message }}</td>
                                <td style="text-align: center">
                                    <a href="/dashboard/message/{{ $message->id }}/delete"
                                        onclick="return confirm('are you sure ?')"><button
                                            style="background-color: rgb(255, 50, 50); margin:auto; border:none; padding: 5px 15px; border-radius:5px">Delete</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="pagination-links">
                    {{-- {{ $user_details->links() }} --}}
                </div>
            </div>

            <div class="table-container" id="patient-table">
                <h2
                    style="text-align: center; font-size:25px; color:blue; letter-spacing:5px; text-transform:uppercase; margin: 0rem 0 2rem 0">
                    All patients Details</h2>
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile No</th>
                            <th>Village</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user_details as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->village }}</td>
                                <td style="text-align: center">
                                    <a href="/dashboard/user/{{ $user->id }}/delete"
                                        onclick="return confirm('are you sure ?')"><button
                                            style="background-color: rgb(255, 50, 50); margin:auto; border:none; padding: 5px 15px; border-radius:5px">Delete</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="pagination-links">
                    {{-- {{ $user_details->links() }} --}}
                </div>
            </div>

            <div class="table-container" id="appointment-table">
                <h1
                    style="font-size: 25px; color:blue; text-align:center; text-transform:uppercase;letter-spacing:5px; margin: 0rem 0 2rem 0">
                    All Appointment Details</h1>
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Phone NO</th>
                            <th>Patient Name</th>
                            <th>Age</th>
                            <th>Address</th>
                            <th>Doctor</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Message</th>
                            <th>Booking Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointment_details as $index => $appointments)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $appointments->phone }}</td>
                                <td>{{ $appointments->name }}</td>
                                <td>{{ $appointments->age }}</td>
                                <td>{{ $appointments->address }}</td>
                                <td>{{ $appointments->doctor }}</td>
                                <td>{{ $appointments->date }}</td>
                                <td>{{$appointments->time_slot}}</td>
                                <td>{{ $appointments->problem }}</td>
                                <td>{{ $appointments->created_at }}</td>
                                <td>
                                    {{-- <form action="/dashboard/{{$appointments->id}}/delete" method="POST"
                                        style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form> --}}
                                    {{-- <a href="/dashboard/{{$appointments->id}}/edit"><button>Edit</button></a> --}}
                                    <a href="/dashboard/appointment/{{ $appointments->id }}/delete"
                                        onclick="return confirm('are you sure ?')"><button
                                            style="background-color: rgb(255, 40, 40); margin:auto; border:none; padding:5px; border-radius:5px">Delete</button></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination-links">
                    {{-- {{ $appointment_details->links() }} --}}
                </div>
            </div>
        </div>


        {{-- </section>

    <section style="width:100%;"> --}}
        <div class="doctor" id="add-new-doctor">
            <h1
                style="color: blue; font-size:35px; text-align:center; margin-top:2rem; margin-bottom:2rem; text-transform:uppercase; letter-spacing:5px;">
                Add New Doctor</h1>
            <div class="doctor-container"
                style="display: flex; justify-content:center; align-items:center; gap:5rem; flex-wrap:wrap">

                <div class="image-controller flex-6">
                    <img src="images/Medicine-cuate.png" alt="home img" class="doctor-registration-img" />
                </div>
                <div class="container flex-6">
                    <form data="norepeat" class="form" action="{{ route('doctorReg') }}" method="POST"
                        enctype="multipart/form-data">
                        <h2 style="text-align: center; color:rgb(82, 82, 243)">Doctor Registration form</h2>
                        @csrf
                        <div class="column">
                            <div class="input-box">
                                <label for="inputEmail4">name</label>
                                <input type="name" class="form-control @error('name') is-invalid @enderror"
                                    id="inputEmail4" placeholder="Full Name" name="name"
                                    value="{{ old('name') }}">
                                <span class="text-danger" style="color:brown">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="input-box">
                                <label for="inputPassword4">age</label>
                                <input type="age" class="form-control @error('age') is-invalid @enderror"
                                    id="inputPassword4" placeholder="age" name="age"
                                    value="{{ old('age') }}">
                                <span class="text-danger" style="color:brown">
                                    @error('age')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                        </div>
                        <div class="input-box">
                            <label for="inputAddress">email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="inputAddress" placeholder="Your Gmail" name="email"
                                value="{{ old('email') }}">
                            <span class="text-danger" style="color:brown">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="column">
                            <div class="input-box">
                                <label for="inputAddress">Qualification</label>
                                <input type="text" class="form-control @error('degree') is-invalid @enderror"
                                    id="inputAddress" placeholder="Qualification" name="degree"
                                    value="{{ old('degree') }}">
                                <span class="text-danger" style="color:brown">
                                    @error('degree')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="input-box">
                                <label for="inputAddress">Specilization</label>
                                <input type="text" class="form-control @error('expertise') is-invalid @enderror"
                                    id="inputAddress" placeholder="Specilization field" name="expertise"
                                    value="{{ old('expertise') }}">
                                <span class="text-danger" style="color:brown">
                                    @error('expertise')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        <div class="input-box">
                            <label for="inputAddress">Work Location</label>
                            <input type="text" class="form-control @error('hospital') is-invalid @enderror"
                                id="inputAddress" placeholder="hospital Name" name="hospital"
                                value="{{ old('hospital') }}">
                            <span class="text-danger" style="color:brown">
                                @error('hospital')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="column ">
                            <div class="input-box">
                                <label for="inputCity">Mobile No</label>
                                <input type="number" class="form-control @error('phone') is-invalid @enderror"
                                    id="inputCity" placeholder="mobile no" name="phone"
                                    value="{{ old('phone') }}">
                                <span class="text-danger" style="color:brown">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="input-box">
                                <label for="inputState">exprience year</label>
                                <select id="inputState" class="select-box @error('exprience') is-invalid @enderror"
                                    name="exprience" value="{{ old('exprience') }}">
                                    <option selected>Choose...</option>
                                    <option value="1">>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="10">6<< /option>
                                </select>
                                <span class="text-danger" style="color:brown">
                                    @error('exprience')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="input-box">
                            <label for="exampleFormControlTextarea1">About Doctor</label>
                            <textarea class="form-control @error('about') is-invalid @enderror" id="exampleFormControlTextarea1" rows=""
                                cols="" name="about" placeholder="About Doctor" value="{{ old('about') }}"></textarea>
                            <span class="text-danger" style="color:brown">
                                @error('about')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="input-box">
                            <label for="exampleFormControlTextarea1">select img</label>
                            <input type="file" class="form-control @error('img') is-invalid @enderror"
                                name="img" value="{{ old('img') }}">
                            <span class="text-danger" style="color: brown">
                                @error('img')
                                    {{ $message }}
                                @enderror
                            </span>

                            {{-- @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                                <img src="images/upload/{{ \Session::get('img') }}">
                            @endif --}}
                        </div>

                        <div class="input-box">
                            <label for="inputAddress">password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="inputAddress" placeholder="min 6 length" name="password"
                                value="{{ old('password') }}">
                            <span class="text-danger" style="color:brown">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <button type="submit">submit</button>
                    </form>
                </div>
            </div>
        </div>


        {{-- --------------------------------doctor details list--------------------------------- --}}
        <div class="table-container" id="doctor-table">
            <h1
                style="font-size: 25px; color:blue; text-align:center; text-transform:uppercase;letter-spacing:5px; margin: 2rem 0 2rem 0">
                All Doctor Details</h1>
            <table class="responsive-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Image</th>
                        <th>Email</th>
                        <th>Phone NO</th>
                        <th>Qualification</th>
                        <th>Department</th>
                        <th>Hospital Name</th>
                        <th>Exprience</th>
                        <th>Biography</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($doctor_details as $index => $doctor)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $doctor->name }}</td>
                            <td>{{ $doctor->age }}</td>
                            <td><img src="images/upload/{{ $doctor->img }}" alt="{{ $doctor->img }}"
                                    style="height: 5rem; width:5rem"></td>
                            <td>{{ $doctor->email }}</td>
                            <td>{{ $doctor->phone }}</td>
                            <td>{{ $doctor->degree }}</td>
                            <td>{{ $doctor->expertise }}</td>
                            <td>{{ $doctor->hospital }}</td>
                            <td>{{ $doctor->exprience }}</td>
                            <td>{{ $doctor->about }}</td>
                            <td>
                                {{-- <form action="/dashboard/{{$appointments->id}}/delete" method="POST"
                            style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form> --}}
                                {{-- <a href="/dashboard/{{$appointments->id}}/edit"><button>Edit</button></a> --}}
                                <a href="/dashboard/doctor/{{ $doctor->id }}/delete"
                                    onclick="return confirm('are you sure ?')"><button
                                        style="background-color: rgb(255, 40, 40); margin:auto; border:none; padding:5px; border-radius:5px">Delete</button></a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pagination-links">
                {{-- {{ $appointment_details->links() }} --}}
            </div>
        </div>




        <footer>
            <div class="footer">
                <div class="row">
                    Copyright © 2024 - All rights reserved || Designed By: Shibsankar.
                </div>
            </div>
        </footer>

    </section>







    <script src="{{ asset('js/dashboard_script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Hide all table containers initially
            $(".table-container").hide();
            $("#add-new-doctor").hide();

            // Click event handler for "Our Patients" link
            $("#patient").click(function() {
                $(".table-container").hide(); // Hide all other tables
                $("#patient-table").show();
                $("#add-new-doctor").hide(); // Show patient table
            });

            // Click event handler for "Our Doctor" link
            $("#doctor").click(function() {
                $(".table-container").hide(); // Hide all other tables
                $("#doctor-table").show();
                $("#add-new-doctor").hide(); // Show doctor table
            });

            $("#message").click(function() {
                $(".table-container").hide(); // Hide all other tables
                $("#message-table").show();
                $("#add-new-doctor").hide(); // Show doctor table
            });

            $("#appointment").click(function() {
                $(".table-container").hide(); // Hide all other tables
                $("#appointment-table").show(); // Show doctor table
                $("#add-new-doctor").hide();
            });

            $("#add-doctor").click(function() {
                $(".table-container").hide(); // Hide all other tables
                $("#add-new-doctor").show(); // Show doctor table
            });

            $("#dashboard").click(function() {
                $(".table-container").hide(); // Hide all other tables
                $("#add-new-doctor").hide(); // Show doctor table
            });
        });
    </script>
</body>

</html>
