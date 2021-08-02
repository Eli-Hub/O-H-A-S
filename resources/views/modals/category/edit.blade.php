<!-- Modal -->

<div class="modal fade text-left" id="edit-category-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">Edit Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="edit-category-form" method="POST" action="{{ route('category.update') }}">

                    @csrf

                    <input type="hidden" name="id" id="e_id">

                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <span>Number in a Room</span>
                            <div class="form-group">
                                <input name="category_name" id="e_category_name" type="text" class="form-control" >
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <span>Amount per Student (GH¢) </span>
                            <div class="form-group">
                                <input name="amount" id="e_amount" type="text" class="form-control" >
                            </div>
                        </div>
                        <br>
                    </div>

                    <button class="btn btn-primary" type="submit">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
