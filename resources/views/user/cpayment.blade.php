
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
              <h1 class="title-single">Complete Payment</h1>
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
    <div class=" edu-accordion-area mg-b-15" >
        <div class="container" >
            <div class="row" >
                <div class="icon-box">
                    <div class="icon-box-icon">
                        <span class="bi bi-cash"></span>
                    </div>
                    <div class="icon-box-content table-cell">
                        <div class="icon-box-title">
                            <h5 class="icon-title">Use the following steps to complete the payment process.</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="admin-pro-accordion-wrap shadow-inner">

                            <div class="panel-group edu-custon-design" id="accordion2">
                                <div class="panel panel-default">
                                    <div class="panel-heading accordion-head">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapse4">
                                            Bank Payment Steps</a>
                                        </h4>
                                    </div>
                                    <div id="collapse4" class="panel-collapse panel-ic collapse in">
                                        <div class="panel-body admin-panel-content animated flash">
                                            <p>It was popularised in the 1960s with the release of Letraset sheets of the containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions.</p>
                                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua of Lorem Ipsum.</p>
                                            <p> Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisis ut aliquip ex ea commodo consequat consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="panel panel-default">
                                    <div class="panel-heading accordion-head">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapse5">
                                            MTN MOMO Pay Steps</a>
                                        </h4>
                                    </div>
                                    <div id="collapse5" class="panel-collapse panel-ic collapse">
                                        <div class="panel-body admin-panel-content animated flash">
                                           <ol>
                                               <li>Dial *170# </li>
                                           </ol>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="panel panel-default">
                                    <div class="panel-heading accordion-head">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapse6">
                                            Vodafone CASH Steps</a>
                                        </h4>
                                    </div>
                                    <div id="collapse6" class="panel-collapse panel-ic collapse">
                                        <div class="panel-body admin-panel-content animated flash">
                                           <ol>
                                               <li>Dial *170# </li>
                                           </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Contact Single-->

  </main><!-- End #main -->






 @include('layouts.inc.user.footer')
