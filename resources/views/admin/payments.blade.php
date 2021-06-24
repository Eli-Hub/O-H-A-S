
  @include('layouts.inc.admin.header')


@include('layouts.inc.admin.sidebar')


@include('layouts.inc.admin.topmenu')


   <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Payment <span class="table-project-n">Details</span></h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>

                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        @if(Auth::user()->is_admin==1)
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">ID</th>
                                                <th data-field="name_stud">Applicant</th>
                                                <th data-field="phone_stud">Phone</th>
                                                <th data-field="dob">Date of Birth</th>
                                                <th data-field="country">Country</th>
                                                <th data-field="email_stud">Email</th>
                                                <th data-field="residence">Residence</th>
                                                <th data-field="parent">Guardian</th>
                                                <th data-field="phone_parent">Phone </th>
                                                <th data-field="hostel_name">Hostel Name</th>
                                                <th data-field="category">Category</th>
                                                <th data-field="duration">Duration</th>
                                                <th data-field="amount">Amount</th>
                                                <th data-field="sch_name">School</th>
                                                <th data-field="index">Index No.</th>
                                                <th data-field="created_at">Payment Date</th>
                                                <th data-field="pay_mode">Payment Mode</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($payments as $payment )


                                            <tr>
                                                <td></td>
                                                <td>{{$payment->id}}</td>
                                                <td>{{$payment->name_stud}}</td>
                                                <td>{{$payment->phone_stud}}</td>
                                                <td>{{$payment->dob}}</td>
                                                <td>{{$payment->country}}</td>
                                                <td>{{$payment->email_stud}}</td>
                                                <td>{{$payment->residence}}</td>
                                                <td>{{$payment->parent}}</td>
                                                <td>{{$payment->phone_parent}}</td>
                                                <td>{{$payment->hostel_name}}</td>
                                                <td>{{$payment->category}}</td>
                                                <td>{{$payment->duration}}</td>
                                                <td>{{$payment->amount}}</td>
                                                <td>{{$payment->sch_name}}</td>
                                                <td>{{$payment->index}}</td>
                                                <td>{{$payment->created}}</td>
                                                <td>{{$payment->pay_mode}}</td>
                                            </tr>

                                            @endforeach
                                        </tbody>
                                        @endif

                                        @if(Auth::user()->is_admin==0)
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">ID</th>
                                                <th data-field="name_stud">Applicant</th>
                                                <th data-field="phone_stud">Phone</th>
                                                {{-- <th data-field="dob">Date of Birth</th> --}}
                                                {{-- <th data-field="country">Country</th> --}}
                                                <th data-field="email_stud">Email</th>
                                                {{-- <th data-field="residence">Residence</th> --}}
                                                <th data-field="parent">Guardian</th>
                                                <th data-field="phone_parent">Phone </th>
                                                {{-- <th data-field="hostel_name">Hostel Name</th> --}}
                                                <th data-field="category">Category</th>
                                                <th data-field="duration">Duration</th>
                                                <th data-field="amount">Amount</th>
                                                <th data-field="sch_name">School</th>
                                                {{-- <th data-field="index">Index No.</th> --}}
                                                {{-- <th data-field="created_at">Payment Date</th> --}}
                                                <th data-field="pay_mode">Payment Mode</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($payments as $payment )


                                            <tr>
                                                <td></td>
                                                <td>{{$payment->id}}</td>
                                                <td>{{$payment->name_stud}}</td>
                                                <td>{{$payment->phone_stud}}</td>
                                                {{-- <td>{{$payment->dob}}</td> --}}
                                                {{-- <td>{{$payment->country}}</td> --}}
                                                <td>{{$payment->email_stud}}</td>
                                                {{-- <td>{{$payment->residence}}</td> --}}
                                                <td>{{$payment->parent}}</td>
                                                <td>{{$payment->phone_parent}}</td>
                                                {{-- <td>{{$payment->hostel_name}}</td> --}}
                                                <td>{{$payment->category}}</td>
                                                <td>{{$payment->duration}}</td>
                                                <td>{{$payment->amount}}</td>
                                                <td>{{$payment->sch_name}}</td>
                                                {{-- <td>{{$payment->index}}</td> --}}
                                                {{-- <td>{{$payment->created}}</td> --}}
                                                <td>{{$payment->pay_mode}}</td>
                                            </tr>

                                            @endforeach
                                        </tbody>
                                        @endif
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
     @include('layouts.inc.admin.footer')
