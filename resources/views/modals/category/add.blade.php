<!-- Modal -->

<div class="modal fade text-left" id="add-category-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">Add New Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="add-category-form" method="POST" action="{{ route('category.create') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <span>Category name</span>
                            <div class="form-group">
                                <input name="category_name" type="text" class="form-control" placeholder="Category name">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <span>Amount per Student (GH¢) </span>
                            <div class="form-group">
                                <input name="amount" type="text" class="form-control" placeholder="Amount">
                            </div>
                        </div>
                        <br>
                    </div>
                    <button class="btn btn-primary" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
