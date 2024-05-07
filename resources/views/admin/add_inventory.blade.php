<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    @include('admin.css')
    <style type="text/css">
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
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->

            @include('admin.navbar')

            <!-- partial -->
            <div class="container-fluid page-body-wrapper">

                <div class="container" align="center" style="padding-top: 100px;">
                    <h1 class="text-center wow fadeInUp" style="font-size: 1.5rem;  padding-bottom:30px; color: rgb(42, 164, 42);" >Add Item to Inventory</h1>

                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{session()->get('message')}}
                    </div>
                    @endif

                    <form action="{{url('upload_inventory')}}" method="POST">
                        @csrf
                        <div style="padding: 15px;">
                            <label>
                                Item Name
                            </label>
                            <input type="text" style="color:black;" name="name" placeholder="Add name here" />
                        </div>

                        <div style="padding: 15px;">
                            <label>
                                Category
                            </label>
                            <select name="category" style="color: black; width: 200px;">
                                <option>--Select--</option>
                                <option value="Medical Supplies">Medical Supplies</option>
                                <option value="Medications">Medications</option>
                                <option value="Equipment">Equipment</option>
                                <option value="Consumables">Consumables</option>
                                <option value="Miscellaaneous">Miscellaneous</option>
                            </select>
                        </div>
                        <div style="padding: 15px;">
                            <label>
                                Quantity
                            </label>
                            <input type="number" style="color:black;" name="quantity" placeholder="Add quantity" />
                        </div>
                        <div style="padding: 15px;">
                            <label>
                                Supplier
                            </label>
                            <input type="text" style="color:black;" name="supplier" placeholder="Add Supplier" />
                        </div>
                        <div style="padding: 15px;">
                            <label>Notes</label>
                            <textarea name="notes" id="notes" rows="6" style="color:black;" placeholder="Enter additional notes..."></textarea>
                        </div>
                        <div style="padding: 15px;">
                            <input type="submit" class="btn btn-success" value="Add Item"/>
                            <input type="reset" class="btn btn-success" value="reset"/>
                        </div>
                    </form>
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