 @include('layouts.inc.admin.header')


@include('layouts.inc.admin.sidebar')


@include('layouts.inc.admin.topmenu')



    <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Occupants</h4>
                            {{-- <div class="add-product">
                                <a href="#">Add Occupant</a>
                            </div> --}}
                            <div class="asset-inner">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>School Name</th>
                                        <th>Index No.</th>
                                        <th>Guardian Name</th>
                                        <th>Guardian Phone</th>
                                        <th>Date of Rent</th>
                                        <th>Due Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($occupants as $occupant)
                                    <tr>
                                        <td>{{$occupant->id}}</td>
                                        <td>{{$occupant->name_stud}}</td>
                                        <td>{{$occupant->phone_stud}}</td>
                                        <td>{{$occupant->sch_name}}</td>
                                        <td>{{$occupant->index}}</td>
                                        <td>{{$occupant->parent}}</td>
                                        <td>{{$occupant->phone_parent}}</td>
                                        <td>{{$occupant->created_at}}</td>
                                        <td>
                                            {{$occupant->created_at->diffForHumans()}}
                                        </td>
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                                <br>
                            </div>
                            <div class="custom-pagination">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
         @include('layouts.inc.admin.footer')
