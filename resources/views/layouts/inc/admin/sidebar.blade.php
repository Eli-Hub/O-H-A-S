
   <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="{{route('admin')}}"><img class="main-logo" src="{{asset('img/logo4.png')}}" style = "width: 200px"alt="" /></a>
                <strong><a href="{{route('admin')}}"><img src="{{asset('img/icon3.png')}}" style = "width: 50px" alt="" /></a></strong>
            </div>
            <br> <br>

            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <br>
                        @if(Auth::user()->is_admin==1)
                        <li>
                            <a href="{{route('admin')}}">
                                <span class="educate-icon educate-home icon-wrap"></span>
                                <span class="mini-click-non">Hostel Overview</span>
							</a>
                        </li>
                        <li>
                            <a class="has-arrow" href="{{route('agentlist')}}" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Hostel Agents</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="All Professors" href="{{route('agentlist')}}"><span class="mini-sub-pro">All Agents</span></a></li>
                                    <li><a title="Add Professor" href="{{route('addagent')}}"><span class="mini-sub-pro">Add Agent</span></a></li>
                                    <li><a title="Edit Professor" href="{{route('edagents')}}"><span class="mini-sub-pro">Edit Agent</span></a></li>
                                </ul>
                        </li>
                            <li>
                                <a class="has-arrow" href="{{route('hostellist')}}" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Hostel Facilities</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="Departments List" href="{{route('hostellist')}}"><span class="mini-sub-pro">Hostel List</span></a></li>
                                    <li><a title="Add Departments" href="{{route('addhostel')}}"><span class="mini-sub-pro">Add Hostel</span></a></li>
                                    <li><a title="Edit Departments" href="{{route('edhostels')}}"><span class="mini-sub-pro">Edit Hostel</span></a></li>
                                </ul>
                            </li>

                        @endif




                        <li>
                            <a href="{{route('sub')}}" aria-expanded="false"><span class="educate-icon educate-message icon-wrap"></span> <span class="mini-click-non"> Messages</span></a>
                        </li>



                        <li>
                            <a href="{{route('pay')}}" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Payments</span></a>
                        </li>

                        <li>
                            <a href="{{route('occupant')}}" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Occupants' Details</span></a>
                        </li>
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false"><span class="fa fa-gear"></span> <span class="mini-click-non">Setup / Settings</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="Categories" href="{{ route('category') }}"><span class="mini-sub-pro">Categories</span></a></li>
                                </ul>
                            </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
