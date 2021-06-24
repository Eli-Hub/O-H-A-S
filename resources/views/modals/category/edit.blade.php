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
                            <div class="form-group"> <span style="font-size: 10px">Category A </span>
                                <input name="category_A" id="e_category_A" type="text" class="form-control" >
                            </div>
                            <div class="form-group"> <span style="font-size: 10px">Category B </span>
                                <input name="category_B" id="e_category_B" type="text" class="form-control" >
                            </div>
                            <div class="form-group"> <span style="font-size: 10px">Category C </span>
                                <input name="category_C" id="e_category_C" type="text" class="form-control" >
                            </div>
                            <div class="form-group"> <span style="font-size: 10px">Category D </span>
                                <input name="category_D" id="e_category_D" type="text" class="form-control" >
                            </div>
                            
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <span>Amount per Student (GH¢) </span>
                            <div class="form-group"> <span style="font-size: 10px">Price A </span>
                                <input name="price_A" id="e_amount_A" type="text" class="form-control" >
                            </div>
                            <div class="form-group"> <span style="font-size: 10px">Price B </span>
                                <input name="price_B" id="e_amount_B" type="text" class="form-control" >
                            </div>
                            <div class="form-group"> <span style="font-size: 10px">Price C </span>
                                <input name="price_C" id="e_amount_C" type="text" class="form-control" >
                            </div>
                            <div class="form-group"> <span style="font-size: 10px">Price D </span>
                                <input name="price_D" id="e_amount_D" type="text" class="form-control" >
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