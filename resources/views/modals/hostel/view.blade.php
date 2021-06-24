<!-- Modal -->

<div class="modal fade text-left" id="view-hostel-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">More Hostel Info</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="view-hostel-form">

                    @csrf

                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="v_category_id">Category ID:</label>
                                <span id="v_category_id"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="no_of_rooms">Number of Rooms:</label>
                                <span id="v_no_of_rooms"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="v_capacity">Hostel Capacity:</label>
                                <span id="v_capacity"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="v_distance">Distance from School:</label>
                                <span id="v_distance"></span>
                            </div>
                        </div>
                      </div>

                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="v_water">Water:</label>
                                <span id="v_water"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="v_kitchen">Kitchen:</label>
                                <span id="v_kitchen"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="v_washroom">Washroom:</label>
                                <span id="v_washroom"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="v_status">Status:</label>
                                <span id="v_status"></span>
                            </div>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
