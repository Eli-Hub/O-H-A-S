@include('layouts.inc.admin.header')


@include('layouts.inc.admin.sidebar')


@include('layouts.inc.admin.topmenu')



    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Agent List</h4>
                        <div class="add-product">
                            <a href="{{route('addagent')}}">Add Agent</a>
                        </div>
                        <div class="asset-inner">
                            <table>
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Agent ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Birth Date</th>
                                    <th>Hostel ID</th>
                                    <th>Hostel Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($agents as $agent)
                                        <tr>
                                            <td><img src="{{ asset('adminassets/uploads/agents/'.str_replace(' ', '_', strtolower($agent->name)). '/' . $agent->picture) }}" alt=""
                                                style="width: 60px; height: 60px" class="img-circle m-b">
                                            </td>
                                            <td>{{$agent->id}}</td>
                                            <td>{{$agent->name}}</td>
                                            <td>{{$agent->phone}}</td>
                                            <td>{{$agent->email}}</td>
                                            <td>{{$agent->gender}}</td>
                                            <td>{{$agent->DOB}}</td>
                                            <td>{{$agent->hostel_id}}</td>
                                            <td>{{$agent->hostel_name}}</td>
                                            <td>
                                                <a data-toggle="tooltip" href="#" title="Register" class="btn btn-primary btn-sm"  ><i class="fa fa-book" aria-hidden="true" ></i></a>
                                                <a data-toggle="tooltip" href="#" title="Edit" class="btn btn-primary btn-sm"  ><i class="fa fa-pencil-square-o" aria-hidden="true" ></i></a>
                                                <a data-toggle="tooltip" href="{{route('agent.delete', [$agent->id])}}" title="Delete" class="btn btn-warning btn-sm"  ><i class="fa fa-trash-o" aria-hidden="true" ></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
