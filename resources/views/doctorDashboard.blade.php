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
                    <span class="text">Doctor Dashboard</span>
                </div>
            </div>
        </div>

        <div class="activity">
            <div class="title">
                <i class="uil uil-clock-three"></i>
                <span class="text">Recent Appointment</span>
            </div>

            @if (session('success'))
                <div
                    style="width:50%; text-align:center; background-color:rgb(0, 255, 4); padding: 10px; text-color:#fff; margin-inline:auto;">
                    {{ session('success') }}
                </div>
            @endif


            <div class="table-container" id="appointment-table">
                <h1
                    style="font-size: 25px; color:blue; text-align:center; text-transform:uppercase;letter-spacing:5px; margin: 0rem 0 2rem 0">
                    Appointment Details</h1>
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
                            <th>Message</th>
                            <th>Booking Date</th>
                            {{-- <th>Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointments as $index => $appointments)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $appointments->phone }}</td>
                                <td>{{ $appointments->name }}</td>
                                <td>{{ $appointments->age }}</td>
                                <td>{{ $appointments->address }}</td>
                                <td>{{ $appointments->doctor }}</td>
                                <td>{{ $appointments->date }}</td>
                                <td>{{ $appointments->problem }}</td>
                                <td>{{ $appointments->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>

            
    <script src="{{ asset('js/dashboard_script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script>
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
    </script> --}}
</body>

</html>
