<!-- Modal -->

<div class="modal fade text-left" id="edit-hostel-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">Edit Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form method="POST" action="{{ route('hostel.update') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <ul id="myTabedu1" class="tab-review-design list-unstyled mb-0">
                                <li><a href="#basic">Basic Information</a></li>
                            </ul>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="review-content-section">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group"> <span style="font-size: 10px"> Hostel Name </span>
                                                <input name="hostel_name"  id="e_hostel_name" type="text" class="form-control" >
                                            </div>
                                            <div class="form-group"><span style="font-size: 10px"> Hostel ID </span>
                                                <input name="hostel_id" id="e_hostel_id" type="text" class="form-control">
                                            </div>
                                            <div class="form-group"> <span style="font-size: 10px"> Location </span>
                                                <input name="location" id="e_location"  type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group"> <span style="font-size: 10px"> Hostel Type </span>
                                                <input class="form-control" name="hostel_type" id="e_hostel_type" type="text">
                                            </div>
                                            <div class="form-group"> <span style="font-size: 10px"> Agent Name </span>
                                                <input name="agent" id="e_agent" type="text" class="form-control">
                                            </div>
                                            <div class="form-group"> <span style="font-size: 10px"> Distance from school </span>
                                                <input name="distance" id="e_distance"  type="text" class="form-control">
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
                                <div class="form-group"> <span style="font-size: 10px"> Water (Anwser: Yes/No/Other) </span>
                                     <input name="water" id="e_water"  type="text" class="form-control">
                                </div>
                                <div class="form-group"> <span style="font-size: 10px"> Kitchen (Anwser: Yes/No/Other) </span>
                                     <input name="kitchen" id="e_kitchen"  type="text" class="form-control">
                                </div>
                                <div class="form-group"> <span style="font-size: 10px"> Washroom (Anwser: Yes/No/Other) </span>
                                     <input name="kitchen" id="e_washroom"  type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                 <div class="form-group"> <span style="font-size: 10px"> Capacity </span>
                                     <input name="capacity" id="e_capacity"  type="text" class="form-control">
                                </div>

                                <div class="form-group"><span style="font-size: 10px"> Number of Rooms </span>
                                    <input name="no_of_rooms" id="e_no_of_rooms"  type="number" class="form-control">
                                </div>

                                 <div class="form-group"><span style="font-size: 10px"> Category ID </span>
                                    <input name="category_id" id="e_category_id" type="number" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <span>Upload Picture of Hostel </span>
                                        <div class="file-upload-inner file-upload-inner-right ts-forms">
                                            <div class="input append-small-btn">
                                                <div class="file-button">
                                                    <input name="picture"  type="file" onchange="document.getElementById('append-small-btn').value = this.value;">
                                                </div>
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
            </div>
        </div>
    </div>
</div>
