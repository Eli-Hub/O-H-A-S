

@include('layouts.inc.admin.header')


@include('layouts.inc.admin.sidebar')


@include('layouts.inc.admin.topmenu')


        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div>
                <h5>Add Hostel </h5>
            </div> <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <form method="POST" action="{{ route('hostel.create') }}" accept-charset="UTF-8" enctype="multipart/form-data">

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <ul id="myTabedu1" class="tab-review-design">
                                <li><a href="#basic">Basic Information</a></li>
                                </ul>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <input name="hostel_name" type="text" class="form-control" placeholder="Hostel Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="hostel_id" type="text" class="form-control" placeholder="Hostel ID">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="location" type="text" class="form-control" placeholder="Location">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <select class="form-control custom-select-value" name="hostel_type" type="text">
                                                            <option>Hostel Type</option>
                                                            <option>Mixed</option>
                                                            <option>Ladies Only</option>
                                                            <option>Gents Only</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="agent" type="text" class="form-control" placeholder="Agent Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="distance" type="text" class="form-control" placeholder="Hostel Distance from School"required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <ul id="myTabedu1" class="tab-review-design">
                                    <li><a href="#price"> Price Information</a></li>
                                </ul>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <span>Number in a Room</span>
                                        <div class="form-group">
                                            <select name="categoryA" type="text" class="form-control" required>
                                                <option>Category A </option>
                                                <option>None</option>
                                                <option>Single</option>
                                                <option>2 in 1</option>
                                                <option>4 in 1</option>
                                                <option>Self Contained</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select name="categoryB" type="text" class="form-control" required>
                                                <option>Category B </option>
                                                <option>None</option>
                                                <option>Single</option>
                                                <option>2 in 1</option>
                                                <option>4 in 1</option>
                                                <option>Self Contained</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select name="categoryC" type="text" class="form-control" required>
                                                <option>Category C </option>
                                                <option>None</option>
                                                <option>Single</option>
                                                <option>2 in 1</option>
                                                <option>4 in 1</option>
                                                <option>Self Contained</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select name="categoryD" type="text" class="form-control" required>
                                                <option>Category D </option>
                                                <option>None</option>
                                                <option>Single</option>
                                                <option>2 in 1</option>
                                                <option>4 in 1</option>
                                                <option>Self Contained</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <span>Price of Room per Student (GH¢) </span>
                                        <div class="form-group">
                                            <input name="priceA" type="text" class="form-control" placeholder="Price A">
                                        </div>
                                        <div class="form-group">
                                            <input name="priceB" type="text" class="form-control" placeholder="Price B">
                                        </div>
                                        <div class="form-group">
                                            <input name="priceC" type="text" class="form-control" placeholder="Price C">
                                        </div>
                                        <div class="form-group">
                                            <input name="priceD" type="text" class="form-control" placeholder="Price D">
                                        </div>

                                    </div>
                                    <br>
                                </div>
                                <br>
                                <ul id="myTabedu1" class="tab-review-design">
                                    <li><a href="#other">Other Information</a></li>
                                </ul>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <span>Utility & Other</span>
                                            <div class="form-group">
                                                <div class="bt-df-checkbox pull-left">
                                                    <label>
                                                    <input class="pull-left radio-checked" type="checkbox"name ="utility_other" value="Toilet">Toilet</label> <br>
                                                    <label>
                                                    <input class="pull-left radio-checked" type="checkbox" name ="utility_other"  value="Bathhouse">Bathhouse</label> <br>
                                                    <label>
                                                    <input class="pull-left radio-checked" type="checkbox" name ="utility_other" value="Kitchen">Kitchen</label> <br>
                                                    <label>
                                                    <input class="pull-left radio-checked" type="checkbox" name ="utility_other" value="Fan">Fan Installed</label> <br>
                                                    <label>
                                                    <input class="pull-left radio-checked"  type="checkbox"name ="utility_other" value="Water"> Water</label> <br>
                                                    <label>
                                                    <input class="pull-left radio-checked" type="checkbox" name ="utility_other" value="Electricity">Electricity</label>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <span>Internal</span>
                                        <div class="form-group">
                                            <input name="capacity" type="number" class="form-control" placeholder="Hostel Capacity">
                                        </div>
                                        <div class="form-group">
                                            <input name="no_of_rooms" type="number" class="form-control" placeholder="Number of Rooms">
                                        </div>
                                        <div class="form-group">
                                            <span>Upload Picture of Hostel </span>
                                                <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                    <div class="input append-small-btn">
                                                        <div class="file-button">
                                                            Browse
                                                            <input name="picture"type="file" onchange="document.getElementById('append-small-btn').value = this.value;">
                                                        </div>
                                                            <input name="picture" type="text" id="append-small-btn" placeholder="no file selected">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="payment-adress">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                            {{-- <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
                                <strong>Success!</strong> Indicates a successful action.
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

@include('layouts.inc.admin.footer')
