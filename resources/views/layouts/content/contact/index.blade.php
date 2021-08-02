@extends('layouts.app')

@section('title', 'Contacts')

@section('content')
{{--
@include('modals.payment.add')
@include('modals.payment.view')
@include('modals.payment.edit') --}}


        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">@yield('title')</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">@yield('title')
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12 d-none">
                        <p>Read full documnetation <a href="https://datatables.net/" target="_blank">here</a></p>
                    </div>
                </div>
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">

                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                           <table class="table table-hover table-hover-animation">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    @if(Auth::user()->is_admin==1)
                                                    <th>Subject</th>
                                                    @endif
                                                    <th>Message</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @if(Auth::user()->is_admin==1)
                                                    @foreach($subs as $sub)
                                                        <tr>
                                                            <td>{{$sub->id}}</td>
                                                            <td>{{$sub->name}}</td>
                                                            <td>{{$sub->email}}</td>
                                                            <td>{{$sub->subject}}</td>
                                                            <td> {{$sub->message}}</td>
                                                             <td><a href="{{route('contact.destroy', [$sub->id])}}" title="Delete" class="btn btn-warning btn-outline btn-sm"  ><i class="fa fa-trash-o" aria-hidden="true" ></i></a></td>
                                                        </tr>
                                                    @endforeach
                                                    @endif

                                                    @if(Auth::user()->is_admin==0)
                                                    @foreach($messages as $message)
                                                        <tr>
                                                            <td>{{$message->id}}</td>
                                                            <td>{{$message->name}}</td>
                                                            <td>{{$message->email}}</td>
                                                            <td> {{$message->message}}</td>
                                                            <td><a href="{{route('message.destroy', [$message->id])}}" title="Delete" class="btn btn-warning btn-outline btn-sm"  ><i class="fa fa-trash-o" aria-hidden="true" ></i></a></td>
                                                        </tr>
                                                    @endforeach
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->
            </div>
        </div>
@endsection
