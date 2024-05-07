<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="{{ url('home') }}"><p style="font-size: 2rem; color:white;" ><span style="color: rgb(42, 164, 42);">One</span>-Health</p></a>
      
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">Admin Previllages</h5>
              
            </div>
          
            
          </div>
        </div>
      </li>
      
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('add_doctor_view') }}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Add Doctor</span>
        </a>
      </li>
      <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('add_inventory')}}">
            <span class="menu-icon">
              <i class="mdi mdi-file-document-box"></i>
            </span>
            <span class="menu-title">Add Inventory</span>
          </a>
        </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('showappointment') }}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Appointments</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('showdoctor') }}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Doctors</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('view_inventory')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Inventory</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('add_service')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Add Services</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('view_service')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Services</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('patient_rec')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Patient Records</span>
        </a>
      </li>

    </ul>
  </nav>