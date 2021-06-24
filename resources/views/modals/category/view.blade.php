<!-- Modal -->

<div class="modal fade text-left" id="view-category-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">View Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="view-category-form">

                    @csrf

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="v_category_C">Category C:</label>
                                    <span id="v_category_C"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="number_of_years">Number of Years:</label>
                                    <span id="v_number_of_years"></span>
                                </div>
                            </div>    
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="v_amount_C">Amount C (GH¢):</label>
                                    <span id="v_amount_C"></span>
                                </div>
                            </div>  
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="v_category_D">Category D:</label>
                                    <span id="v_category_D"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="v_number_of_years">Number of Years:</label>
                                    <span id="v_number_of_years"></span>
                                </div>
                            </div>    
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="v_amount_D">Amount D (GH¢):</label>
                                    <span id="v_amount_D"></span>
                                </div>
                            </div>  
                        </div>
                      
                       
                    </div>                               
                </form>
            </div>
        </div>
    </div>
</div>