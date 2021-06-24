
@include('layouts.inc.admin.header')


@include('layouts.inc.admin.sidebar')


@include('layouts.inc.admin.topmenu')


        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Basic Information</a></li>
                                <li><a href="#reviews"> Login Account</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form method="POST" action="{{ route('agent.create') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="name" type="text" class="form-control" placeholder="Full Name">
                                                                </div>
                                                                {{-- <div class="form-group">
                                                                    <input name="agent_id" type="text" class="form-control" placeholder="Agent ID">
                                                                </div> --}}
                                                                <div class="form-group">
                                                                    <input name="phone" type="number" class="form-control" placeholder="Mobile no.">
                                                                </div>

                                                                <div class="form-group">
                                                                    <span>Date of Birth</span>
                                                                    <input name="DOB"  type="date" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="gender" class="form-control">
																		<option value="none" selected="" disabled="">Select Gender</option>
																		<option value="male">Male</option>
																		<option value="female">Female</option>
																	</select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <select name="hostel_name" class="form-control">
																		<option value="none" selected="" disabled="">Select Hostel</option>
																		<option value="Freedom Hostel">Freedom Hostel</option>
																		<option value="5 Star Hostel">5 Star Hostel</option>
                                                                        <option value="Adaklu Hostel">Adaklu Hostel</option>
                                                                        <option value="Shama Hostel">Shama Hostel</option>
																	</select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <input name="hostel_id" type="text" class="form-control" placeholder="Hostel ID">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="email" type="text" class="form-control" placeholder="Email">
                                                                </div>

                                                                <div class="form-group">
                                                                    <span>Upload Picture of Agent </span>
                                                                        {{-- <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                                            <div class="input append-small-btn">
                                                                                <div class="file-button">
                                                                                    Browse
                                                                                    <input name="picture" type="file" onchange="document.getElementById('append-small-btn').value = this.value;">
                                                                                </div>
                                                                                    <input name="filename" type="text" id="append-small-btn" placeholder="no file selected">
                                                                            </div>
                                                                        </div> --}}
                                                                        <div class="form-group">
                                                                            <input class=" form-control" type="file" name="picture" id="picture_1">
                                                                        </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <form method="POST" action="#" accept-charset="UTF-8">
                                                            <div class="devit-card-custom">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                <div class="form-group">
                                                                    <input name="name" type="text" class="form-control" placeholder="Full Name">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="is_admin" type="number" class="form-control" placeholder="Role">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="password" type="password" class="form-control" placeholder="Password">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="confarmpassword" type="password" class="form-control" placeholder="Confirm Password">
                                                                </div>
                                                                <div class="row">
                                                                <div class="col-lg-12">
                                                                    <input class="btn btn-default btn-register" type="submit" value="Submit">
                                                                </div>

                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
       @include('layouts.inc.admin.footer')
