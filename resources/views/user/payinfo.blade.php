
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



              <div class="col-md-10">

                  <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                      @csrf

                      <div class="row" style="align:center">
                          <input type="hidden" name="currency" value="GHS">
                          <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                          <input type="hidden" name="quantity" id="hostel-id">
                          <input type="hidden" name="orderID" id="category-id">
                          <input type="hidden" name="metadata" id="duration-id" >

                          <div class="icon-box">
                              <div class="icon-box-icon">
                                  <span class="bi bi-building"></span>
                              </div>
                              <div class="icon-box-content table-cell">
                                  <div class="icon-box-title">
                                      <h5 class="icon-title">Renting Information</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6 mb-3"><span style="font-size: 12px">Hostel</span>
                              <div class="form-group">
                                  <select name="hostel_id" id="hostels" type="text" class="form-control" required>
                                      <option value="">Select Hostel </option>
                                  </select>
                                  <input type="hidden" id="hostel_name" name="hostel_name">
                              </div>
                          </div>
                          <div class="col-md-6 mb-3"><span style="font-size: 12px">Room Category</span>
                              <div class="form-group">
                                  <select name="category" id="category_id" type="text" class="form-control" required>
                                      <option value="">Select Category </option>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-6 mb-3">
                              <div class="form-group"><span style="font-size: 12px">Duration (years)</span>
                                  <input name="duration" id="number_of_years" type="number" class="form-control" placeholder="Enter no. of year(s) of rent" required>
                              </div>
                          </div>
                          <div class="col-md-6 mb-3">
                              <div class="form-group"><span style="font-size: 12px">E-mail</span>
                                  <input name="email" id="email" type="email" class="form-control" required>
                              </div>
                          </div>
                          <div class="col-md-6 mb-3">
                              <div class="form-group"><span style="font-size: 12px">Amount in (GH¢)</span>
                                  <input type="text" id="amount" readonly class="form-control">
                                  <input type="hidden" name="amount" id="new-amount">
                              </div>
                          </div>
{{--                          <div class="col-md-6 mb-3">--}}
{{--                              <div class="form-group"><span style="font-size: 12px">Student Name</span>--}}
{{--                                  <input type="text" id="stud-name" readonly class="form-control">--}}
{{--                                  <input type="hidden" name="stud_name" id="stud-name">--}}
{{--                              </div>--}}
{{--                          </div>--}}
                          <div class="col-md-12 text-center">
                              <br><button type="submit" class="btn btn-a"> Pay <span id="amount-btn"></span> Now! </button>
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
