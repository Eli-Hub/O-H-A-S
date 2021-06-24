

@include('layouts.inc.admin.header')


@include('layouts.inc.admin.sidebar')


@include('layouts.inc.admin.topmenu')

@include('layouts.inc.admin.infoModal')

@include('layouts.inc.admin.editModal')

@include('modals.category.add')


{{--
<div class="modal-bootstrap shadow-inner mg-tb-30 responsive-mg-b-0">
    <div class="modal-area-button">
        <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalalert">Primary</a>
    </div>
</div> --}}
         <!-- Static Table Start -->
         <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Category <span class="table-project-n">List</span></h1>
                                </div>
                                <div class="add-product">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-category-modal">
                                       <i class="fa fa-plus-circle"></i> Add Category
                                    </button>
                                </div>

                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    <table id="table-category" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr >
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Number of Years</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="cat-list"></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->



    @include('layouts.inc.admin.footer')
