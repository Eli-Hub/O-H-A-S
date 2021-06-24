
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('home') }}">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">OHAS</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item active"><a href="{{ route('home') }}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">
                    @if(Auth::user()->is_admin==1) Admin @else Agent @endif Dashboard</span></a>
                </li>
                @if(Auth::user()->is_admin==1)
                <li class=" navigation-header"><span>Agents Details</span>
                </li>
               
                <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">Agents</span></a>
                    <ul class="menu-content">
                        <li><a href="{{ route('adminagent') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">List</span></a>
                        </li>
                    </ul>
                </li>
                
                <li class=" navigation-header"><span>Hostel Facility</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-list"></i><span class="menu-title" data-i18n="Data List">Hostel</span></a>
                    <ul class="menu-content">
                        <li><a href="{{ route('hostel') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">List</span></a>
                        </li>
                    </ul>
                 @endif
                  <li class=" navigation-header"><span>Agent's Hostel</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-list"></i><span class="menu-title" data-i18n="Data List">Occupants</span></a>
                    <ul class="menu-content">
                        <li><a href="{{route('occupant')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">List</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-list"></i><span class="menu-title" data-i18n="Data List">Payments</span></a>
                    <ul class="menu-content">
                        <li><a href="{{ route('pay') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">List</span></a>
                        </li>
                    </ul>
                </li>
                </li>

                <li class=" navigation-header"><span>Subscribers</span>
                     <li class=" nav-item"><a href="{{route('sub')}}"><i class="feather icon-list"></i><span class="menu-title" data-i18n="Data List">@if(Auth::user()->is_admin==1)Admin @else Agent @endif Contacts  </span></a>
                    </li>
                </li>
               
                
                 <li class=" navigation-header"><span>Settings</span>
                </li>

                <li class=" nav-item"><a href="#"><i class="feather icon-layout"></i><span class="menu-title" data-i18n="Content">Setups</span></a>
                    <ul class="menu-content">
                        <li><a href="{{ route('category') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Grid">Categories</span></a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>