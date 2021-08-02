
   @include('layouts.inc.user.header')

  @include('layouts.inc.user.psearch')

   @include('layouts.inc.user.navbar')



     <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link  " href="{{route('index')}}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{route('about')}}">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{route('prop')}}">Property</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route('pay')}}">Payment</a>
          </li>
        </ul>
      </div>
      <span> Search Hostel </span>
      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>

    </div>
  </nav><!-- End Header/Navbar -->


  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Make Payment</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Payment
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Contact Single ======= -->
    <section class="contact" >
      <div class="container" >
        <div class="row" >

            <div class="icon-box">
                <div class="icon-box-icon">
                  <span class="bi bi-person"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h5 class="icon-title">Personal Information</h5>
                  </div>
                </div>
            </div>

              <div class="col-md-10">
                <form action="{{route('userInfo')}}" method= "POST" accept-charset="UTF-8" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  <div class="row" style="align:center">
                    <div class="col-md-6 mb-3">
                        <div class="form-group"><span style="font-size: 12px">Name of Student</span>
                          <input type="text" name="name_stud" class="form-control" placeholder="Eg: Desmond Kurl" required>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <div class="form-group"><span style="font-size: 12px">Phone Number (+ Country Code)</span>
                          <input name="phone_stud" type="text" class="form-control" placeholder="Eg: +233240000000" required>
                        </div>
                    </div>
                      <div class="col-md-6 mb-3">
                        <div class="form-group"><span style="font-size: 12px">Date of Birth (Eg: 08/31/2003)</span>
                          <input name="dob" type="date" class="form-control" placeholder="Date of Birth" required>
                        </div>
                      </div>

                      <div class="col-md-6 mb-3">
                          <div class="form-group"> <span style="font-size: 12px">Student's Email</span>
                            <input name="email_stud" type="email" class="form-control" placeholder="Valid Email" required>
                          </div>
                      </div>
                      <div class="col-md-6 mb-3">
                          <div class="form-group"><span style="font-size: 12px">Country</span>
                            <select name="country" type="text" class="form-control" required>
                                <option>Select your country</option>
                                <option>Ghana</option>
                                <option>Togo</option>
                                <option>Nigeria</option>
                                <option>South Africa</option>
                                <option>USA</option>
                            </select>
                          </div>
                      </div>
                      <div class="col-md-6 mb-3">
                          <div class="form-group"><span style="font-size: 12px">Region</span>
                            <select name="region" type="text" class="form-control" required>
                                <option>Select your region/state</option>
                                <option>Volta</option>
                                <option>Greater Accra</option>
                                <option>Nothern</option>
                                <option>Central</option>
                                <option>Ashanti</option>
                            </select>
                          </div>
                      </div>
                      <div class="col-md-6 mb-3"><span style="font-size: 12px">Residence</span>
                          <div class="form-group">
                            <input name="residence" type="text" class="form-control" placeholder="Any landmark or streetname" required>
                          </div>
                      </div>
                      <div class="col-md-6 mb-3"><span style="font-size: 12px">Parent/Guardian</span>
                        <div class="form-group">
                          <input name="guardian" type="text" class="form-control" placeholder="Enter Full name" required>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <div class="form-group"><span style="font-size: 12px">Guardian's Phone Number</span>
                          <input name="guard_phone" type="text" class="form-control" placeholder="Phone no. of parent" required><br>
                        </div>
                    </div>
                      <div class="col-md-6 mb-3">
                        <div class="form-group"><span style="font-size: 12px">School Name</span>
                          <input name="sch_name" type="text" class="form-control" placeholder="Name of School" required><br>
                        </div>
                    </div>
                      <div class="col-md-6 mb-3">
                        <div class="form-group"><span style="font-size: 12px">Index Number</span>
                          <input name="index" type="text" class="form-control" placeholder="Index Number" required><br>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <span>Upload Picture of Applicant</span>
                        <div class="form-group">
                            <input class=" form-control" type="file" name="picture" id="picture_1">
                        </div>
                    </div>



                    <div class="col-md-12 text-center">
                        <br><button type="submit" class="btn btn-a"> Submit Details </button>
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Single-->

  </main><!-- End #main -->






 @include('layouts.inc.user.footer')
