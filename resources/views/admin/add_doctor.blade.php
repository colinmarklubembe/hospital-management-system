


<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <style>
         label
        {
            text-align: start;
            width: 300px;
            
        }
        
    body
    {
      background-image: linear-gradient(to right, rgba(164, 213, 156, 0), rgb(94, 103, 98));
    }

    

    

    </style>
    <!-- Required meta tags -->
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      {{-- <div class="row p-0 m-0 proBanner" id="proBanner">
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
      </div> --}}
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      
      @include('admin.navbar')

        <!-- partial -->
        
         <div class="container-fluid page-body-wrapper">


            <div class="container" align="center" style="padding-top: 100px;">
              <h1 class="text-center wow fadeInUp" style="font-size: 1.5rem; padding-bottom:30px; color: rgb(42, 164, 42);" >Register Doctor</h1>

                
            @if (session()->has('message'))

            <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert">X</button>

                {{ session()->get('message') }}

            </div>
                
            @endif


                <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div style="padding:15px;">
                        <label for="">Doctor Name</label>
                        <input type="text" name="name" style="color:black" placeholder="Write the name" id="">
                    </div>

                    <div style="padding:15px;">
                        <label for="">Phone</label>
                        <input type="number" name="phone" style="color:black" placeholder="phone number" id="">
                    </div>

                    <div style="padding:15px;">
                      <label for="">Email</label>
                      <input type="text" name="email" style="color:black" placeholder="Email" id="">
                  </div>

                  <div style="padding:15px;">
                    <label for="">Address</label>
                    <input type="text" name="address" style="color:black" placeholder="Address" id="">
                  </div>

                  

                  <input type="text" name="password" value="12345678" style="display:none; ">

                  
                    <div style="padding:15px;">
                        <label for="speciality">Speciality</label>
                        <select name="speciality" id="" style="width:200px; color:black"  >
                            <option value="">--select--</option>
                            <option value="General">General</option>
                            <option value="Optician">Optician</option>
                            <option value="Dentist">Dentist</option>
                            <option value="Dermatologist">Dermatologist</option>
                            <option value="Peditrician">Peditrician</option> 

                        </select>
                    </div>

                    <div style="padding:15px;">
                        <label for="">Room Number</label>
                        <input type="text" name="room" style="color:black" placeholder="Room" id="">
                    </div>

                    <div style="padding:15px;">
                        <label for="file">Doctor Image</label>
                        <input type="file" name="file" id="">
                    </div>

                    <input type="submit" class="btn btn-success">
                    <input type="reset" class="btn btn-success">
                </form>


            </div>

         </div>
      
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>