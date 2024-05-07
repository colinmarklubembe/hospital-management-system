


<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <!-- Required meta tags -->
   @include('admin.css')
   <style>body
    {
      background-image: linear-gradient(to right, rgba(188, 192, 188, 0.948), rgb(221, 244, 232));
    }</style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      
      @include('admin.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

          <div class="container">
            <h1 class="text-center wow fadeInUp" style="font-size: 1.5rem; padding-top:50px; padding-bottom:40px; color: rgb(42, 164, 42);" >Doctors</h1>
            <table class="table table-striped table-bordered">
              <thead class="thead-dark">
                        <th>Doctor name</th>
                        <th>Phone</th>
                        <th>Speciality</th>
                        <th>Room Number</th>
                        <th>Image</th>
                        <th>Action</th> 
                            
                    </tr>
              </thead>
              <tbody>

                    @foreach ($data as $doctor)
                    
                    <tr>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->phone }}</td>
                        <td>{{ $doctor->speciality }}</td>
                        <td>{{ $doctor->room }}</td>
                        <td><img src="doctorimage/{{ $doctor->image }}" alt="" style="width:100px; height:100px;
                        border-radius:50px; object-fit:cover;"></td>
                        <td><a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')" href="{{ url('deletedoctor',$doctor->id) }}">Delete</a> <a class="btn btn-success" href="{{ url('updatedoctor',$doctor->id) }}">Update</a></td>
                        
                    </tr>

                    @endforeach
                  </tbody>
                </table>

            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>