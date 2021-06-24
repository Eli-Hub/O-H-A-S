<!-- Modal -->

<div class="modal fade text-left" id="edit-agent-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">Edit Agent</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="edit-agent-form" method="POST" action="{{ route('agent.update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="e_id">
                   <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-content-section">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group"><span style="font-size: 10px">Agent Name</span>
                                            <input name="agent_name" id="e_agent_name" type="text" class="form-control">
                                        </div>
                                        <div class="form-group"><span style="font-size: 10px">Phone No.</span>
                                            <input id="e_phone" name="phone" type="text" class="form-control" >
                                        </div>
                                        <div class="form-group"><span style="font-size: 10px">Email</span>
                                            <input name="email" id="e_email" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group"><span style="font-size: 10px">Gender</span>
                                           <select class="form-control custom-select-value" name="gender" type="text" id="e_gender" >
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group"> <span style="font-size: 10px">Date of Birth</span>
                                            <input name="DOB" id="e_DOB" type="text" class="form-control">
                                        </div>
                                        <div class="form-group"> <span style="font-size: 10px">Hostel Name</span>
                                            <input name="hostel_name" id="e_hostel_name" type="text" class="form-control">
                                        </div>
                                        <div class="form-group"><span>Upload Picture of Agent </span>
                                            <div class="form-group">
                                                <input class="form-control" type="file" name="picture" id="e_picture">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
