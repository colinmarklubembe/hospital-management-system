<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    @include('admin.css')
    <style type="text/css">
        
        body
    {
        background-image: linear-gradient(to right, rgba(188, 192, 188, 0.948), rgb(221, 244, 232));
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
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->

            @include('admin.navbar')

            <!-- partial -->
            <div class="container-fluid page-body-wrapper" style="margin-left: 0px;">
                <div class="container">
                    <h1 class="text-center wow fadeInUp" style="font-size: 1.5rem; padding-top:50px; padding-bottom:40px; color: rgb(42, 164, 42);" >Patient Records</h1>
                    <table class="table table-striped table-bordered" >
                      <thead class="thead-dark">
                        <tr>
                          <th>Name</th>
                          <th>Contact</th>
                          <th>Age</th>
                          <th>Gender</th>
                          <th>Date</th>
                          <th>Signs/Symptoms</th>
                          <th>Test Results</th>
                          <th>Medication</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($patient as $patients)
                        <tr>
                            <td>{{ $patients->name }}</td>
                            <td>{{ $patients->contact }}</td>
                            <td>{{ $patients->age }}</td>
                            <td>{{ $patients->gender }}</td>
                            <td>{{ $patients->date }}</td>
                            <td>{{ $patients->signs_symptoms }}</td>
                            <td>{{ $patients->test_results }}</td>
                            <td>{{ $patients->drug_prescription }}</td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
            <!-- main-panel ends -->

        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.script')
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>