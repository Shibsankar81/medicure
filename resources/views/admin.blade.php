<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{'css/admin.css'}}">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-12">
    <div class="sidebar">
        <a class="active" href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
      </div>
      
      <!-- Page content -->
      <div class="content">
        <div style="overflow-x:auto;">
            <div class="row row-cols-1 row-cols-md-3 g-4">

                  <div class="card mb-3 mr-3" style="max-width: 340px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="..." class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-3" style="max-width: 340px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="..." class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-3" style="max-width: 340px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="..." class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <h1>Our Doctor</h1>
            <table class="table">
              <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Degree</th>
                    <th>expertise</th>
                    <th>Work Location</th>
                    <th>Mobile No</th>
                    <th>exprience</th>
                    <th>About</th>
                    <th>Image</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($doctors as $doctor)

                  <tr>
                    <td>{{$doctor->id}}</td>
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->age}}</td>
                    <td>{{$doctor->email}}</td>
                    <td>{{$doctor->degree}}</td>
                    <td>{{$doctor->expertise}}</td>
                    <td>{{$doctor->hospital}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->exprience}}</td>
                    <td>{{$doctor->about}}</td>
                    <td><img src="images/upload/{{$doctor->img}}" alt="" style="height:60px; width:100px;"></td>
                  </tr>
                  @endforeach
                </tbody>
            </table>

            <h1>All User</h1>
            <table class="table">
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
                  @foreach ($users as $user)

                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->village}}</td>
                    <td>
                      <form action="{{ route('destroy', $user->id) }}" method="POST" style ="display:inline">
                        @csrf
                        @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>

            <h1>Appointment Booking Details</h1>
            <table class="table">
              <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Mobile No</th>
                    <th>Doctor Name</th>
                    <th>date</th>
                    <th>Time</th>
                    <th>problem</th>
                    <th>operation</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($bookings as $booking)

                  <tr>
                    <td>{{$booking->id}}</td>
                    <td>{{$booking->name}}</td>
                    <td>{{$booking->age}}</td>
                    <td>{{$booking->address}}</td>
                    <td>{{$booking->phone}}</td>
                    <td>{{$booking->doctor}}</td>
                    <td>{{$booking->date}}</td>
                    <td>{{$booking->time_slot}}</td>
                    <td>{{$booking->problem}}</td>
                    <td>

                      {{-- <a href="{{ route('resources.edit' . $booking->id) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a> --}}

                      <a class="btn btn-primary" href="{{ route('bookEdit', $booking->id) }}">Edit</a>
                      <form action="{{ route('destroy', $booking->id) }}" method="POST" style ="display:inline">
                        @csrf
                        @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>




          </div>
      </div>
    </div>
</div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>