@extends('layout.app')
@section('contents')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Seller Table</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard">
                        <p class="card-text">The Following table show a complete list of all registered Sellers in the
                            system.<i class="mr-5 text-info ft-user-plus float-right" style="font-size: 30px;"></i> </p>
                        <div class="table-responsive">
                            <div id="DataTables_Table_2_wrapper"
                                 class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="DataTables_Table_2_length"><label>Show
                                                <select name="DataTables_Table_2_length"
                                                        aria-controls="DataTables_Table_2"
                                                        class="form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="DataTables_Table_2_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control form-control-sm"
                                                                 placeholder=""
                                                                 aria-controls="DataTables_Table_2"></label></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-striped table-bordered multi-ordering dataTable no-footer"
                                               id="DataTables_Table_2" role="grid"
                                               aria-describedby="DataTables_Table_2_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="First name: activate to sort column descending"
                                                    style="width: 136px;">First name
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Last name: activate to sort column ascending"
                                                    style="width: 136px;">Last name
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Position: activate to sort column ascending"
                                                    style="width: 319px;">Email
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Office: activate to sort column ascending"
                                                    style="width: 164px;">Address
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to sort column ascending"
                                                    style="width: 138px;">Actions
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to sort column ascending"
                                                    style="width: 138px;">Status
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to sort column ascending"
                                                    style="width: 138px;">Suspended
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to sort column ascending"
                                                    style="width: 138px;">
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1 sorting_2">Airi</td>
                                                <td>Waheed</td>
                                                <td>Sindhani</td>
                                                <td>wahheed.example.com</td>
                                                <td>
                                                    <i class="ft-edit-3 text-info mr-3" style="font-size: 30px;"></i>
                                                    <i class="ft-user-x text-danger" style="font-size: 30px;"></i>
                                                </td>
                                                <td>
                                                    <form>
                                                    <input type="checkbox" class="js-switch" checked />
                                                    </form>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="DataTables_Table_2_info" role="status"
                                             aria-live="polite">Showing 1 to 10 of 57 entries
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                             id="DataTables_Table_2_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="DataTables_Table_2_previous"><a href="#"
                                                                                        aria-controls="DataTables_Table_2"
                                                                                        data-dt-idx="0" tabindex="0"
                                                                                        class="page-link">Previous</a>
                                                </li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                                                                aria-controls="DataTables_Table_2"
                                                                                                data-dt-idx="1"
                                                                                                tabindex="0"
                                                                                                class="page-link">1</a>
                                                </li>
                                                <li class="paginate_button page-item "><a href="#"
                                                                                          aria-controls="DataTables_Table_2"
                                                                                          data-dt-idx="2" tabindex="0"
                                                                                          class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                                                          aria-controls="DataTables_Table_2"
                                                                                          data-dt-idx="3" tabindex="0"
                                                                                          class="page-link">3</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                                                          aria-controls="DataTables_Table_2"
                                                                                          data-dt-idx="4" tabindex="0"
                                                                                          class="page-link">4</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                                                          aria-controls="DataTables_Table_2"
                                                                                          data-dt-idx="5" tabindex="0"
                                                                                          class="page-link">5</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                                                          aria-controls="DataTables_Table_2"
                                                                                          data-dt-idx="6" tabindex="0"
                                                                                          class="page-link">6</a></li>
                                                <li class="paginate_button page-item next" id="DataTables_Table_2_next">
                                                    <a href="#" aria-controls="DataTables_Table_2" data-dt-idx="7"
                                                       tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop
@section('js')
    <script>
    var elem = document.querySelector('.js-switch');
    new Switchery(elem, { size: '50px' });
    </script>
    @stop