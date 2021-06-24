<!-- Modal -->

<div class="modal fade text-left " id="add-agent-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">Add New Agent</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <form method="POST" action="{{ route('adminagent.create') }}" id="add-agent-form" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input name="agent_name" type="text" class="form-control" placeholder="Full Name">
                                </div>

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
