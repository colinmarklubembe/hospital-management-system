<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp" style="font-size: 2rem">Make an Appointment</h1>

  

      @if (Route::has('login'))

      @auth
      <form class="main-form" action="{{ url('appointment') }}" method="POST">

      @csrf

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="departement" class="custom-select">

              <option> ---select doctor---</option>

              @foreach ($doctor as $doctors )

              <option value="{{ $doctors->name }}">{{ $doctors->name }} ------ {{ $doctors->speciality }}</option>
                
              @endforeach

              
              
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="number" class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <input type="submit" class="btn btn-primary mt-3 wow zoomIn" value="Submit Request">
      </form>
      @else

      <h2 class="text-center wow fadeInUp" style="font-size: 2rem"><a href="{{ route('login') }}">Login to make an Appointment</a></h2>   

      @endauth

      @endif
    </div>
  </div>