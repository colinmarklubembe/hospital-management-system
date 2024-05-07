


<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <!-- Required meta tags -->
   @include('admin.css')
   <style>
    label {
            display: inline-block;
            width: 200px;
        }
    body
    {
      background-image: linear-gradient(to right, rgba(164, 213, 156, 0), rgb(94, 103, 98));
    }
   </style>
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


            <div class="container" align="center" style="padding-top: 100px;padding-bottom:50px;" >
              <h1 class="text-center wow fadeInUp" style="font-size: 1.5rem;  padding-bottom:30px; color: rgb(42, 164, 42);" >Update Doctor Details</h1>

                @if (session()->has('message'))

                    <div class="alert alert-success">

                        <button type="button" class="close" data-dismiss="alert">X</button>

                        {{ session()->get('message') }}

                    </div>
                
                @endif


                <form action="{{ url('editdoctor',$data->id) }}" method="POST" enctype="multipart/form-data" >

                    @csrf

                    <div style="padding:15px;">
                        <label for="">Doctor Name</label>
                        <input type="text" name="name" style="color:black" value={{ $data->name }}>
                    </div>

                    <div style="padding:15px;">
                        <label for="">Phone</label>
                        <input type="number" name="phone" style="color:black" value={{ $data->phone }} >
                    </div>

                    <div style="padding:15px;">
                        <label for="">Speciality</label>
                        <input type="text" name="speciality" style="color:black" value={{ $data->speciality }}>
                    </div>

                    <div style="padding:15px;">
                        <label for="">Room</label>
                        <input type="text" name="room" style="color:black" value={{ $data->room }} >
                    </div>

                    <div style="padding:15px;">
                        <label for="">Old Image</label>
                        <img src="doctorimage/{{ $data->image }}" alt="" style="height:200px;width:200px; object-fit:cover;" >
                    </div>

                    <div>
                        <label for="file">Change Image</label>
                        <input type="file" name="file" id="">
                    </div>

                    <input type="submit" class="btn btn-success" value="update">

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