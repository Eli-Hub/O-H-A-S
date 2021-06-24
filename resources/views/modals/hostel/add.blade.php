

<!-- Modals Start-->

<div class="modal fade text-left" id="add-hostel-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">Add New Hostel</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <form method="POST" id="add-hostel-form" action="{{ route('hostel.create') }}" enctype="multipart/form-data">
                        @csrf

                            <ul id="myTabedu1" class="tab-review-design list-unstyled mb-0">
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
                        <ul id="myTabedu1" class="tab-review-design list-unstyled mb-0">
                            <li><a href="#other">Other Information</a></li>
                        </ul>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                      <label>Water</label>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con">
                                                        <input type="radio" name="water" checked value="Yes">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                       Yes
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con">
                                                        <input type="radio" name="water" value="No">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        No
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con">
                                                        <input type="radio" name="water" value="Other">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        Other
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                                </div>
                                 <div class="form-group">
                                      <label>Kitchen</label>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con">
                                                        <input type="radio" name="kitchen" checked value="Yes">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                       Yes
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con">
                                                        <input type="radio" name="kitchen" value="No">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        No
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con">
                                                        <input type="radio" name="kitchen" value="Other">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        Other
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                                </div>
                                 <div class="form-group">
                                      <label>Washroom</label>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con">
                                                        <input type="radio" name="washroom" checked value="Yes">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                       Yes
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con">
                                                        <input type="radio" name="washroom" value="No">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        No
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con">
                                                        <input type="radio" name="washroom" value="Other">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        Other
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <input name="capacity" type="number" class="form-control" placeholder="Hostel Capacity">
                                </div>

                                <div class="form-group">
                                    <input name="no_of_rooms" type="number" class="form-control" placeholder="Number of Rooms">
                                </div>

                                 <div class="form-group">
                                     <div class="form-group">
                                         <select class="form-control custom-select-value select2" name="category_id" id="category_id">
                                             <option value="">Select category</option>
                                         </select>
                                     </div>
                                </div>

                                <div class="form-group">
                                    <span>Upload Picture of Hostel </span>
                                        <div class="file-upload-inner file-upload-inner-right ts-forms">
                                            <div class="input append-small-btn">
                                                <div class="file-button">
                                                    <input name="picture" id="picture" type="file" onclick="load_image('picture', 'image_loader')" onchange="document.getElementById('append-small-btn').value = this.value;">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <span class="mt-5" id="image_loader"></span>
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
            </div>
        </div>
    </div>
</div>
<!-- Modals End-->
