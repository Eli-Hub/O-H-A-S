<!-- Modal -->

<div class="modal fade text-left" id="view-occupant-modal" tabindex="-1" role="dialog" aria-strongledby="myModalstrong1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalstrong1">More Applicant Info</h4>
                <button type="button" class="close" data-dismiss="modal" aria-strong="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="view-occupant-form">

                    @csrf

                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong for="v_dob">Date of Birth:</strong>
                                <span id="v_dob"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong for="country">Country:</strong>
                                <span id="v_country"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong for="v_email_stud">Email:</strong>
                                <span id="v_email_stud"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong for="v_residence">Residence:</strong>
                                <span id="v_residence"></span>
                            </div>
                        </div>

                      </div>

                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong for="v_guardian">Guardian:</strong>
                                <span id="v_guardian"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong for="v_guard_phone">Guardian Phone:</strong>
                                <span id="v_guard_phone"></span>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <strong for="v_sch_name">School:</strong>
                                <span id="v_sch_name"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong for="v_index">Index No.:</strong>
                                <span id="v_index"></span>
                            </div>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
