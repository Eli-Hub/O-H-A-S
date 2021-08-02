<!-- Modal -->

<div class="modal fade text-left" id="edit-occupant-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">Assign Room</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form method="POST" action="{{ route('occupant.update') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   <input type="hidden" name="id" id="e_id">
                   <div class="row">
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <div class="review-content-section">
                               <div class="row">
                                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">


                                       <div class="form-group"> <span style="font-size: 10px"> Name </span>
                                           <input name="name_stud" id="e_name_stud"  type="text" class="form-control">
                                       </div>


                                       <div class="form-group"> <span style="font-size: 10px"> Date of Birth </span>
                                           <input name="dob" id="e_dob"  type="text" class="form-control">
                                       </div>

                                       <div class="form-group"><span style="font-size: 10px"> Index Number </span>
                                           <input name="index" id="e_index"  type="text" class="form-control">
                                       </div>
                                   </div>
                                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                       <div class="form-group"> <span style="font-size: 10px"> Phone </span>
                                           <input class="form-control" name="phone_stud" id="e_phone_stud" type="text">
                                       </div>

                                       <div class="form-group"><span style="font-size: 10px"> Room Number </span>
                                           <input name="room_no" id="e_room_no"  type="text" class="form-control">
                                       </div>
                                       <div class="form-group"> <span style="font-size: 10px"> Email </span>
                                           <input name="email_stud" id="e_email_stud" type="text" class="form-control">
                                       </div>

                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

                   <br>

                   <div class="row">
                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="form-group"> <span style="font-size: 10px"> Country</span>
                               <input name="country" id="e_country"  type="text" class="form-control">
                           </div>
                           <div class="form-group"> <span style="font-size: 10px"> Region </span>
                               <input name="region" id="e_region"  type="text" class="form-control">
                           </div>
                           <div class="form-group"> <span style="font-size: 10px"> Residence </span>
                               <input name="residence" id="e_residence"  type="text" class="form-control">
                           </div>
                       </div>
                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                           <div class="form-group"> <span style="font-size: 10px"> School Name </span>
                               <input name="sch_name" id="e_sch_name"  type="text" class="form-control">
                           </div>


                           <div class="form-group"><span style="font-size: 10px"> Guardian Phone</span>
                               <input name="guard_phone" id="e_guard_phone"  type="text" class="form-control">
                           </div>

                           <div class="form-group">

                               <div class="form-group"><span style="font-size: 10px"> Guardian </span>
                                   <input name="guardian" id="e_guardian"  type="text" class="form-control">
                               </div>
                           </div>
                       </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">



                           </div>

                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <span>Upload Picture of Student </span>
                           <div class="file-upload-inner file-upload-inner-right ts-forms">
                               <div class="input append-small-btn">
                                   <div class="file-button">
                                       <input name="picture"  type="file" onchange="document.getElementById('append-small-btn').value = this.value;">
                                   </div>
                               </div>
                           </div>
                           </div>
                   </div>
                   <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="payment-address">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
