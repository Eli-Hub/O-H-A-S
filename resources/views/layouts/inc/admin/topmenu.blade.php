   <!-- Start Welcome area -->
    <div class="all-content-wrapper"> <br/> <br/> <br/>

        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">

                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
                                                    <span> Menu </span>
												</button>


                                        </div>

                                    </div>
                                    <div class="col-md-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                @if(Auth::user()->is_admin==1)

                                                <li class="nav-item"><a class="nav-link">Admin<h4>  D A S H B O A R D </h4></a> </li>

                                                @endif

                                                @if(Auth::user()->is_admin==0)

                                                <li class="nav-item"><a class="nav-link">Agent<h4>  D A S H B O A R D </h4></a> </li>

                                                @endif
                                            </ul>

                                        </div>

                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">

                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu">
                                                            {{-- @if(Auth::user()->is_admin==1)
                                                            @foreach($subs as $sub)
                                                            <li style="align:center">
                                                                <a href="{{route('sub')}}" >
                                                                    <div class="message-content" >
                                                                        <h2>{{$sub->subject}}</h2>
                                                                        <span>{{$sub->message}}<i>  <strong>from:</strong>  {{$sub->name}} </i></span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            @endforeach
                                                            @endif --}}

                                                            {{-- @if(Auth::user()->is_admin==0)
                                                            @foreach($messages as $message)
                                                            <li style="align:center">
                                                                <a href="{{route('sub')}}" >
                                                                    <div class="message-content" >
                                                                        <h2>{{$message->subject}}</h2>
                                                                        <span>{{$message->message}}<i>  <strong>from:</strong>  {{$message->name}} </i></span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            @endforeach
                                                            @endif --}}


                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="{{route('sub')}}">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>


                                                <li class="nav-item">
                                                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="adminassets/img/product/pro4.jpg" alt="" />
															<span class="admin-name"> Welcome, {{ Auth::user()->name }}</span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">

                                                        <li><a href="{{route('profile')}}"><span class="edu-icon edu-user-rounded author-log-ic"></span> Profile</a>
                                                        </li>
                                                        <li>
                                                                <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                                    <span class="edu-icon edu-locked author-log-ic"></span>Log Out
                                                                </a>
                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                    @csrf
                                                                </form>
                                                        </li>

                                                    </ul>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                {{-- <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>

                                    </div>

                                </div> --}}
                                <marquee> <span> Online Hostel Admission System for  Private Hostels...View Every Detail Here</span></marquee>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
