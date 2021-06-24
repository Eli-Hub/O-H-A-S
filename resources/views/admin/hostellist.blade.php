

@include('layouts.inc.admin.header')


@include('layouts.inc.admin.sidebar')


@include('layouts.inc.admin.topmenu')

@include('layouts.inc.admin.infoModal')

@include('layouts.inc.admin.editModal')

@include('modals.hostel.add')


{{--
<div class="modal-bootstrap shadow-inner mg-tb-30 responsive-mg-b-0">
    <div class="modal-area-button">
        <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalalert">Primary</a>
    </div>
</div> --}}
         <!-- Static Table Start -->
         <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Hostel <span class="table-project-n">List</span></h1>
                                </div>
                                <div class="add-product">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-hostel-modal">
                                       <i class="fa fa-plus-circle"></i> Add Hostel
                                    </button>
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
                                        <thead>
                                            <tr >
                                                <th  data-checkbox="true"></th>
                                                <th>Image</th>
                                                <th>Hostel ID</th>
                                                <th>Hostel Name</th>
                                                <th>Location</th>
                                                <th>Hostel Type</th>
                                                <th>Agent</th>
                                                <th>Category ID</th>
                                                <th>Number In Room</th>
                                                <th>Capacity</th>
                                                <th>School Distance</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($lists as $list)
                                            <tr>
                                                <td></td>
                                                <td> <img src="{{ asset('adminassets/uploads/hostels/'.str_replace(' ', '_', strtolower($list->hostel_name)). '/' . $list->picture) }}" alt=""
                                                    style="width: 80px; height: 50px" class="img-square m-b">
                                                </td>
                                                <td> {{$list->id}}</td>
                                                <td> {{$list->hostel_name}}</td>
                                                <td> {{$list->location}}</td>
                                                <td> {{$list->hostel_type}}</td>
                                                <td> {{$list->agent}}</td>
                                                <td> {{$list->category_id}}</td>
                                                <td> {{$list->no_of_rooms}}</td>
                                                <td> {{$list->capacity}}</td>
                                                <td> {{$list->distance}}</td>
                                                <td> {{$list->created_at->diffForHumans()}}</td>
                                                <td>
                                                    {{-- <a data-toggle="modal" data-target="#InformationproModalalert" title="More Info" class="btn btn-primary btn-sm" class="pd-setting-ed"><i class="fa fa-book" aria-hidden="true"></i></a> --}}
                                                    <a data-toggle="modal" data-target="#PrimaryModalalert" title="Edit"  class="btn btn-primary btn-sm" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    <a data-toggle="tooltip" href="{{route('h.delete', $list->id)}}" title="Delete" class="btn btn-warning btn-sm"  ><i class="fa fa-trash-o" aria-hidden="true" ></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
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
