@include('layouts.inc.admin.header')


@include('layouts.inc.admin.sidebar')


@include('layouts.inc.admin.topmenu')

        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Subscribers</h4>

                            <div class="asset-inner">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        @if(Auth::user()->is_admin==1)
                                        <th>Subject</th>
                                        @endif
                                        <th>Message</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @if(Auth::user()->is_admin==1)
                                        @foreach($subs as $sub)
                                            <tr>
                                                <td  id="td">{{$sub->id}}</td>
                                                <td class="widget-heading"  id="td">{{$sub->name}}</td>
                                                <td class="text-center" id="td">{{$sub->email}}</td>
                                                <td class="text-center" id="td">{{$sub->subject}}</td>
                                                <td class="text-center" id="td"> {{$sub->message}}</td>
                                            </tr>
                                        @endforeach
                                        @endif

                                        @if(Auth::user()->is_admin==0)
                                        @foreach($messages as $message)
                                            <tr>
                                                <td  id="td">{{$message->id}}</td>
                                                <td class="widget-heading"  id="td">{{$message->name}}</td>
                                                <td class="text-center" id="td">{{$message->email}}</td>
                                                <td class="text-center" id="td"> {{$message->message}}</td>
                                            </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="custom-pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @include('layouts.inc.admin.footer')
