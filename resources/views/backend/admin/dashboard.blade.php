@extends('layout.app')
@section('contents')
            <!-- eCommerce statistic -->
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card pull-up ecom-card-1 bg-white">
                        <div class="card-content ecom-card2 height-180">
                            <h5 class="text-muted danger position-absolute p-1">Progress Stats</h5>
                            <div>
                                <i class="ft-pie-chart danger font-large-1 float-right p-1"></i>
                            </div>
                            <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                                <div id="progress-stats-bar-chart"></div>
                                <div id="progress-stats-line-chart" class="progress-stats-shadow"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card pull-up ecom-card-1 bg-white">
                        <div class="card-content ecom-card2 height-180">
                            <h5 class="text-muted info position-absolute p-1">Activity Stats</h5>
                            <div>
                                <i class="ft-activity info font-large-1 float-right p-1"></i>
                            </div>
                            <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                                <div id="progress-stats-bar-chart1"></div>
                                <div id="progress-stats-line-chart1" class="progress-stats-shadow"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="card pull-up ecom-card-1 bg-white">
                        <div class="card-content ecom-card2 height-180">
                            <h5 class="text-muted warning position-absolute p-1">Sales Stats</h5>
                            <div>
                                <i class="ft-shopping-cart warning font-large-1 float-right p-1"></i>
                            </div>
                            <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                                <div id="progress-stats-bar-chart2"></div>
                                <div id="progress-stats-line-chart2" class="progress-stats-shadow"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ eCommerce statistic -->
            <!-- Product Summary and Chat -->
            <div class="row match-height">
                <div class="col-xl-8 col-lg-12">
                    <h5 class="card-title text-bold-700 my-2">Product Summary</h5>
                    <div class="card">
                        <div class="card-content">
                            <div id="product-summary" class="media-list position-relative">
                                <div class="table-responsive">
                                    <table class="table table-padded table-xl mb-0" id="product-summary-table">
                                        <thead>
                                        <tr>
                                            <th class="border-top-0">Product</th>
                                            <th class="border-top-0">Brand</th>
                                            <th class="border-top-0">Category</th>
                                            <th class="border-top-0">Sales</th>
                                            <th class="border-top-0">Stock level</th>
                                            <th class="border-top-0">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-truncate">iPhone X</td>
                                            <td class="text-truncate">
                                                <a href="#">Apple</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-danger round" type="button">Mobile</button>
                                            </td>
                                            <td class="text-truncate">
                                        <span>
                                            <i class="ft-arrow-up success"></i> 6.89%</span>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="text-truncat mr-1">
                                                <a href="#">
                                                    <i class="ft-shopping-cart blue-grey lighten-2 font-medium-5 ml-1"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">Shoes</td>
                                            <td class="text-truncate">
                                                <a href="#">Nike</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-warning round" type="button">Fashion</button>
                                            </td>
                                            <td class="text-truncate">
                                        <span>
                                            <i class="ft-arrow-down danger"></i> 5.15%</span>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="text-truncat mr-1">
                                                <a href="#">
                                                    <i class="ft-shopping-cart blue-grey lighten-2 font-medium-5 ml-1"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">OnePlus</td>
                                            <td class="text-truncate">
                                                <a href="#">MI</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-danger round" type="button">Mobile</button>
                                            </td>
                                            <td class="text-truncate">
                                        <span>
                                            <i class="ft-arrow-up success"></i> 9.89%</span>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="text-truncat mr-1">
                                                <a href="#">
                                                    <i class="ft-shopping-cart blue-grey lighten-2 font-medium-5 ml-1"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">Watch</td>
                                            <td class="text-truncate">
                                                <a href="#">Rolex</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-success round" type="button">Watch</button>
                                            </td>
                                            <td class="text-truncate">
                                        <span>
                                            <i class="ft-arrow-up success"></i> 15.89%</span>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="text-truncat mr-1">
                                                <a href="#">
                                                    <i class="ft-shopping-cart blue-grey lighten-2 font-medium-5 ml-1"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <h5 class="card-title text-bold-700 my-2">Order Activity</h5>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="col-12 timeline-left" id="activity">
                                    <div class="timeline pt-2">
                                        <ul class="list-unstyled base-timeline activity-timeline">
                                            <li class="">
                                                <div class="timeline-icon bg-danger">
                                                    <i class="ft-map-pin font-medium-1"></i>
                                                </div>
                                                <div class="act-time">Today</div>
                                                <div class="base-timeline-info">
                                                    <a href="#" class="text-danger">Delivered</a>
                                                </div>
                                                <small class="text-muted">
                                                    25 mins ago
                                                </small>
                                            </li>
                                            <li class="">
                                                <div class="timeline-icon bg-primary">
                                                    <i class="ft-shopping-cart font-medium-1"></i>
                                                </div>
                                                <div class="act-time">Yesterday</div>
                                                <div class="base-timeline-info">
                                                    <a href="#" class="text-primary">In Transit</a>
                                                </div>
                                                <small class="text-muted">
                                                    23 hours ago
                                                </small>
                                            </li>
                                            <li class="">
                                                <div class="timeline-icon bg-dark">
                                                    <i class="ft-box font-medium-1"></i>
                                                </div>
                                                <div class="act-time">05 March</div>
                                                <div class="base-timeline-info">
                                                    <a href="#" class="text-dark">Dispatched</a>
                                                </div>
                                                <small class="text-muted">
                                                    4 days ago
                                                </small>
                                            </li>
                                            <li class="">
                                                <div class="timeline-icon bg-warning">
                                                    <i class="ft-user font-medium-1"></i>
                                                </div>
                                                <div class="act-time">04 March</div>
                                                <div class="base-timeline-info">
                                                    <a href="#" class="text-warning">Order Received</a>
                                                </div>
                                                <small class="text-muted">
                                                    5 days ago
                                                </small>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Products sell and New Orders -->
            <!--/ Task & Quarterly Sales -->
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Today's Tasks</h4>
                            <a class="heading-elements-toggle">
                                <i class="fa fa-ellipsis-v font-medium-3"></i>
                            </a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li>
                                        <a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right" href="#">New Task</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body pl-0 pr-0">
                            <div id="todays-tasks">
                                <div class="table-responsive">
                                    <table class="table table-padded mb-0" id="recent-buyer-table">
                                        <tbody>
                                        <tr>
                                            <td class="text-truncate border-0">
                                                <input type="checkbox" class="chk-task">
                                            </td>
                                            <td class="text-truncate border-0 pl-0">
                                                <span class="list-group-item-heading">Phasellus vel elit, urna a.</span>
                                            </td>
                                            <td class="text-truncate border-0">
                                                <span class="badge badge-danger">Meeting</span>
                                            </td>
                                            <td class="text-truncate border-0">
                                                <ul class="list-unstyled users-list m-0 text-right">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="John Doe" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-19.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Katherine Nichols" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-18.png" alt="Avatar">
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate border-0"><input type="checkbox" class="chk-task"></td>
                                            <td class="text-truncate border-0 pl-0">
                                                <span class="list-group-item-heading text-decoration">Proin varius at lacinia.</span>
                                            </td>
                                            <td class="text-truncate border-0">
                                                <span class="badge badge-warning">Work</span>
                                            </td>
                                            <td class="text-truncate border-0">
                                                <ul class="list-unstyled users-list m-0 text-right">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="John Doe" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-15.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Joseph Weaver" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-14.png" alt="Avatar">
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate border-0"><input type="checkbox" class="chk-task"></td>
                                            <td class="text-truncate border-0 pl-0">
                                                <span class="list-group-item-heading">Curabitur tempor, quam vel finibus.</span>
                                            </td>
                                            <td class="text-truncate border-0">
                                                <span class="badge badge-primary">Store</span>
                                            </td>
                                            <td class="text-truncate border-0">
                                                <ul class="list-unstyled users-list m-0 text-right">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="John Doe" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-11.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Katherine Nichols" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-12.png" alt="Avatar">
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate border-0"><input type="checkbox" class="chk-task"></td>
                                            <td class="text-truncate border-0 pl-0">
                                                <span class="list-group-item-heading text-decoration">Donec pulvinar nisi ac convallis porta.</span>
                                            </td>
                                            <td class="text-truncate border-0">
                                                <span class="badge badge-success">Documents</span>
                                            </td>
                                            <td class="text-truncate border-0">
                                                <ul class="list-unstyled users-list m-0 text-right">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Joseph Weaver" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-10.png" alt="Avatar">
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate border-0"><input type="checkbox" class="chk-task"></td>
                                            <td class="text-truncate border-0 pl-0">
                                                <span class="list-group-item-heading">Aliquam finibus tellus magna.</span>
                                            </td>
                                            <td class="text-truncate border-0">
                                                <span class="badge badge-danger">Analysis</span>
                                            </td>
                                            <td class="text-truncate border-0">
                                                <ul class="list-unstyled users-list m-0 text-right">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="John Doe" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-12.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Katherine Nichols" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-15.png" alt="Avatar">
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Quarterly Sales</h4>
                            <a class="heading-elements-toggle">
                                <i class="la la-ellipsis-v font-medium-3"></i>
                            </a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li>
                                        <a data-action="reload">
                                            <i class="ft-rotate-cw"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div id="quarterly-sales" class="height-300 BarChartShadow"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Task & Quarterly Sales -->
            <!-- Statistics -->
            <div class="row">
                <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">Customer Stats</h4>
                            <a class="heading-elements-toggle">
                                <i class="la la-ellipsis-v font-medium-3"></i>
                            </a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li>
                                        <a data-action="reload">
                                            <i class="ft-rotate-cw"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body text-center">
                                <div class="card-header pt-0 pb-0">
                                    <p class="danger darken-2">Total Customers</p>
                                    <h3 class="display-4 blue-grey lighten-2">14,962</h3>
                                </div>
                                <div class="card-content">
                                    <div id="new-customers" class="height-150 donutShadow"></div>
                                    <ul class="list-inline clearfix mt-2">
                                        <li>
                                            <h1 class="blue-grey lighten-2 text-bold-400">1465</h1>
                                            <span class="danger darken-2">
                                    <i class="ft-user"></i> Average New Customers</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">Recent products</h4>
                                <h6 class="card-subtitle text-muted">Carousel Card With Header & Footer</h6>
                            </div>
                            <div id="carousel-area" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-area" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-area" data-slide-to="1"></li>
                                    <li data-target="#carousel-area" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img src="../../../app-assets/images/carousel/08.jpg" class="d-block w-100" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../../../app-assets/images/carousel/03.jpg" class="d-block w-100" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../../../app-assets/images/carousel/01.jpg" class="d-block w-100" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carousel-area" role="button" data-slide="prev">
                                    <span class="la la-angle-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-area" role="button" data-slide="next">
                                    <span class="la la-angle-right icon-next" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                        <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                            <span class="float-left">2 days ago</span>
                            <span class="tags float-right">
                    <span class="badge badge-pill badge-primary">Branding</span>
                    <span class="badge badge-pill badge-danger">Design</span>
                </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Recent Buyers</h4>
                            <a class="heading-elements-toggle">
                                <i class="fa fa-ellipsis-v font-medium-3"></i>
                            </a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li>
                                        <a data-action="reload">
                                            <i class="ft-rotate-cw"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div id="recent-buyers" class="media-list">
                                <a href="#" class="media border-0">
                                    <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-online">
                                <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-7.png" alt="Generic placeholder image">
                                <i></i>
                            </span>
                                    </div>
                                    <div class="media-body w-100">
                            <span class="list-group-item-heading">Kristopher Candy

                            </span>
                                        <ul class="list-unstyled users-list m-0 float-right">
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="../../../app-assets/images/portfolio/portfolio-1.jpg"
                                                     alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 2" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="../../../app-assets/images/portfolio/portfolio-2.jpg"
                                                     alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 3" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="../../../app-assets/images/portfolio/portfolio-4.jpg"
                                                     alt="Avatar">
                                            </li>
                                        </ul>
                                        <p class="list-group-item-text mb-0">
                                            <span class="blue-grey lighten-2 font-small-3"> #INV-12332 </span>
                                        </p>
                                    </div>
                                </a>
                                <a href="#" class="media border-0">
                                    <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-away">
                                <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-8.png" alt="Generic placeholder image">
                                <i></i>
                            </span>
                                    </div>
                                    <div class="media-body w-100">
                            <span class="list-group-item-heading">Lawrence Fowler

                            </span>
                                        <ul class="list-unstyled users-list m-0 float-right">
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="../../../app-assets/images/portfolio/portfolio-5.jpg"
                                                     alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 2" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="../../../app-assets/images/portfolio/portfolio-6.jpg"
                                                     alt="Avatar">
                                            </li>
                                        </ul>
                                        <p class="list-group-item-text mb-0">
                                            <span class="blue-grey lighten-2 font-small-3"> #INV-12333 </span>
                                        </p>
                                    </div>
                                </a>
                                <a href="#" class="media border-0">
                                    <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-busy">
                                <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-9.png" alt="Generic placeholder image">
                                <i></i>
                            </span>
                                    </div>
                                    <div class="media-body w-100">
                            <span class="list-group-item-heading">Linda Olson

                            </span>
                                        <ul class="list-unstyled users-list m-0 float-right">
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="../../../app-assets/images/portfolio/portfolio-2.jpg"
                                                     alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 2" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="../../../app-assets/images/portfolio/portfolio-5.jpg"
                                                     alt="Avatar">
                                            </li>
                                        </ul>
                                        <p class="list-group-item-text mb-0">
                                            <span class="blue-grey lighten-2 font-small-3"> #INV-12334 </span>
                                        </p>
                                    </div>
                                </a>
                                <a href="#" class="media border-0">
                                    <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-online">
                                <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-10.png" alt="Generic placeholder image">
                                <i></i>
                            </span>
                                    </div>
                                    <div class="media-body w-100">
                            <span class="list-group-item-heading">Roy Clark

                            </span>
                                        <ul class="list-unstyled users-list m-0 float-right">
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="../../../app-assets/images/portfolio/portfolio-6.jpg"
                                                     alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 2" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="../../../app-assets/images/portfolio/portfolio-1.jpg"
                                                     alt="Avatar">
                                            </li>
                                        </ul>
                                        <p class="list-group-item-text mb-0">
                                            <span class="blue-grey lighten-2 font-small-3"> #INV-12335 </span>
                                        </p>
                                    </div>
                                </a>
                                <a href="#" class="media border-0">
                                    <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-online">
                                <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-11.png" alt="Generic placeholder image">
                                <i></i>
                            </span>
                                    </div>
                                    <div class="media-body w-100">
                            <span class="list-group-item-heading">Kristopher Candy

                            </span>
                                        <ul class="list-unstyled users-list m-0 float-right">
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="../../../app-assets/images/portfolio/portfolio-5.jpg"
                                                     alt="Avatar">
                                            </li>
                                        </ul>
                                        <p class="list-group-item-text mb-0">
                                            <span class="blue-grey lighten-2 font-small-3"> #INV-12336 </span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Chart -->
            <!-- eCommerce statistic -->
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card pull-up ecom-card-1 bg-white">
                        <div class="card-content ecom-card2 height-180">
                            <h5 class="text-muted danger position-absolute p-1">Progress Stats</h5>
                            <div>
                                <i class="ft-pie-chart danger font-large-1 float-right p-1"></i>
                            </div>
                            <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                                <div id="progress-stats-bar-chart"></div>
                                <div id="progress-stats-line-chart" class="progress-stats-shadow"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card pull-up ecom-card-1 bg-white">
                        <div class="card-content ecom-card2 height-180">
                            <h5 class="text-muted info position-absolute p-1">Activity Stats</h5>
                            <div>
                                <i class="ft-activity info font-large-1 float-right p-1"></i>
                            </div>
                            <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                                <div id="progress-stats-bar-chart1"></div>
                                <div id="progress-stats-line-chart1" class="progress-stats-shadow"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="card pull-up ecom-card-1 bg-white">
                        <div class="card-content ecom-card2 height-180">
                            <h5 class="text-muted warning position-absolute p-1">Sales Stats</h5>
                            <div>
                                <i class="ft-shopping-cart warning font-large-1 float-right p-1"></i>
                            </div>
                            <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                                <div id="progress-stats-bar-chart2"></div>
                                <div id="progress-stats-line-chart2" class="progress-stats-shadow"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ eCommerce statistic -->
            <!-- Product Summary and Chat -->
            <div class="row match-height">
                <div class="col-xl-8 col-lg-12">
                    <h5 class="card-title text-bold-700 my-2">Product Summary</h5>
                    <div class="card">
                        <div class="card-content">
                            <div id="product-summary" class="media-list position-relative">
                                <div class="table-responsive">
                                    <table class="table table-padded table-xl mb-0" id="product-summary-table">
                                        <thead>
                                        <tr>
                                            <th class="border-top-0">Product</th>
                                            <th class="border-top-0">Brand</th>
                                            <th class="border-top-0">Category</th>
                                            <th class="border-top-0">Sales</th>
                                            <th class="border-top-0">Stock level</th>
                                            <th class="border-top-0">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-truncate">iPhone X</td>
                                            <td class="text-truncate">
                                                <a href="#">Apple</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-danger round" type="button">Mobile</button>
                                            </td>
                                            <td class="text-truncate">
                                        <span>
                                            <i class="ft-arrow-up success"></i> 6.89%</span>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="text-truncat mr-1">
                                                <a href="#">
                                                    <i class="ft-shopping-cart blue-grey lighten-2 font-medium-5 ml-1"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">Shoes</td>
                                            <td class="text-truncate">
                                                <a href="#">Nike</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-warning round" type="button">Fashion</button>
                                            </td>
                                            <td class="text-truncate">
                                        <span>
                                            <i class="ft-arrow-down danger"></i> 5.15%</span>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="text-truncat mr-1">
                                                <a href="#">
                                                    <i class="ft-shopping-cart blue-grey lighten-2 font-medium-5 ml-1"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">OnePlus</td>
                                            <td class="text-truncate">
                                                <a href="#">MI</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-danger round" type="button">Mobile</button>
                                            </td>
                                            <td class="text-truncate">
                                        <span>
                                            <i class="ft-arrow-up success"></i> 9.89%</span>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="text-truncat mr-1">
                                                <a href="#">
                                                    <i class="ft-shopping-cart blue-grey lighten-2 font-medium-5 ml-1"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">Watch</td>
                                            <td class="text-truncate">
                                                <a href="#">Rolex</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-success round" type="button">Watch</button>
                                            </td>
                                            <td class="text-truncate">
                                        <span>
                                            <i class="ft-arrow-up success"></i> 15.89%</span>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="text-truncat mr-1">
                                                <a href="#">
                                                    <i class="ft-shopping-cart blue-grey lighten-2 font-medium-5 ml-1"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <h5 class="card-title text-bold-700 my-2">Order Activity</h5>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="col-12 timeline-left" id="activity">
                                    <div class="timeline pt-2">
                                        <ul class="list-unstyled base-timeline activity-timeline">
                                            <li class="">
                                                <div class="timeline-icon bg-danger">
                                                    <i class="ft-map-pin font-medium-1"></i>
                                                </div>
                                                <div class="act-time">Today</div>
                                                <div class="base-timeline-info">
                                                    <a href="#" class="text-danger">Delivered</a>
                                                </div>
                                                <small class="text-muted">
                                                    25 mins ago
                                                </small>
                                            </li>
                                            <li class="">
                                                <div class="timeline-icon bg-primary">
                                                    <i class="ft-shopping-cart font-medium-1"></i>
                                                </div>
                                                <div class="act-time">Yesterday</div>
                                                <div class="base-timeline-info">
                                                    <a href="#" class="text-primary">In Transit</a>
                                                </div>
                                                <small class="text-muted">
                                                    23 hours ago
                                                </small>
                                            </li>
                                            <li class="">
                                                <div class="timeline-icon bg-dark">
                                                    <i class="ft-box font-medium-1"></i>
                                                </div>
                                                <div class="act-time">05 March</div>
                                                <div class="base-timeline-info">
                                                    <a href="#" class="text-dark">Dispatched</a>
                                                </div>
                                                <small class="text-muted">
                                                    4 days ago
                                                </small>
                                            </li>
                                            <li class="">
                                                <div class="timeline-icon bg-warning">
                                                    <i class="ft-user font-medium-1"></i>
                                                </div>
                                                <div class="act-time">04 March</div>
                                                <div class="base-timeline-info">
                                                    <a href="#" class="text-warning">Order Received</a>
                                                </div>
                                                <small class="text-muted">
                                                    5 days ago
                                                </small>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Products sell and New Orders -->
            <!--/ Task & Quarterly Sales -->
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Today's Tasks</h4>
                            <a class="heading-elements-toggle">
                                <i class="fa fa-ellipsis-v font-medium-3"></i>
                            </a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li>
                                        <a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right" href="#">New Task</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body pl-0 pr-0">
                            <div id="todays-tasks">
                                <div class="table-responsive">
                                    <table class="table table-padded mb-0" id="recent-buyer-table">
                                        <tbody>
                                        <tr>
                                            <td class="text-truncate border-0">
                                                <input type="checkbox" class="chk-task">
                                            </td>
                                            <td class="text-truncate border-0 pl-0">
                                                <span class="list-group-item-heading">Phasellus vel elit, urna a.</span>
                                            </td>
                                            <td class="text-truncate border-0">
                                                <span class="badge badge-danger">Meeting</span>
                                            </td>
                                            <td class="text-truncate border-0">
                                                <ul class="list-unstyled users-list m-0 text-right">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="John Doe" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-19.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Katherine Nichols" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-18.png" alt="Avatar">
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate border-0"><input type="checkbox" class="chk-task"></td>
                                            <td class="text-truncate border-0 pl-0">
                                                <span class="list-group-item-heading text-decoration">Proin varius at lacinia.</span>
                                            </td>
                                            <td class="text-truncate border-0">
                                                <span class="badge badge-warning">Work</span>
                                            </td>
                                            <td class="text-truncate border-0">
                                                <ul class="list-unstyled users-list m-0 text-right">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="John Doe" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-15.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Joseph Weaver" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-14.png" alt="Avatar">
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate border-0"><input type="checkbox" class="chk-task"></td>
                                            <td class="text-truncate border-0 pl-0">
                                                <span class="list-group-item-heading">Curabitur tempor, quam vel finibus.</span>
                                            </td>
                                            <td class="text-truncate border-0">
                                                <span class="badge badge-primary">Store</span>
                                            </td>
                                            <td class="text-truncate border-0">
                                                <ul class="list-unstyled users-list m-0 text-right">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="John Doe" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-11.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Katherine Nichols" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-12.png" alt="Avatar">
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate border-0"><input type="checkbox" class="chk-task"></td>
                                            <td class="text-truncate border-0 pl-0">
                                                <span class="list-group-item-heading text-decoration">Donec pulvinar nisi ac convallis porta.</span>
                                            </td>
                                            <td class="text-truncate border-0">
                                                <span class="badge badge-success">Documents</span>
                                            </td>
                                            <td class="text-truncate border-0">
                                                <ul class="list-unstyled users-list m-0 text-right">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Joseph Weaver" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-10.png" alt="Avatar">
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate border-0"><input type="checkbox" class="chk-task"></td>
                                            <td class="text-truncate border-0 pl-0">
                                                <span class="list-group-item-heading">Aliquam finibus tellus magna.</span>
                                            </td>
                                            <td class="text-truncate border-0">
                                                <span class="badge badge-danger">Analysis</span>
                                            </td>
                                            <td class="text-truncate border-0">
                                                <ul class="list-unstyled users-list m-0 text-right">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="John Doe" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-12.png" alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Katherine Nichols" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-15.png" alt="Avatar">
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Quarterly Sales</h4>
                            <a class="heading-elements-toggle">
                                <i class="la la-ellipsis-v font-medium-3"></i>
                            </a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li>
                                        <a data-action="reload">
                                            <i class="ft-rotate-cw"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div id="quarterly-sales" class="height-300 BarChartShadow"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Task & Quarterly Sales -->
            <!-- Statistics -->
            <div class="row">
                <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">Customer Stats</h4>
                            <a class="heading-elements-toggle">
                                <i class="la la-ellipsis-v font-medium-3"></i>
                            </a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li>
                                        <a data-action="reload">
                                            <i class="ft-rotate-cw"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body text-center">
                                <div class="card-header pt-0 pb-0">
                                    <p class="danger darken-2">Total Customers</p>
                                    <h3 class="display-4 blue-grey lighten-2">14,962</h3>
                                </div>
                                <div class="card-content">
                                    <div id="new-customers" class="height-150 donutShadow"></div>
                                    <ul class="list-inline clearfix mt-2">
                                        <li>
                                            <h1 class="blue-grey lighten-2 text-bold-400">1465</h1>
                                            <span class="danger darken-2">
                                    <i class="ft-user"></i> Average New Customers</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">Recent products</h4>
                                <h6 class="card-subtitle text-muted">Carousel Card With Header & Footer</h6>
                            </div>
                            <div id="carousel-area" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-area" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-area" data-slide-to="1"></li>
                                    <li data-target="#carousel-area" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img src="../../../app-assets/images/carousel/08.jpg" class="d-block w-100" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../../../app-assets/images/carousel/03.jpg" class="d-block w-100" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../../../app-assets/images/carousel/01.jpg" class="d-block w-100" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carousel-area" role="button" data-slide="prev">
                                    <span class="la la-angle-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-area" role="button" data-slide="next">
                                    <span class="la la-angle-right icon-next" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                        <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                            <span class="float-left">2 days ago</span>
                            <span class="tags float-right">
                    <span class="badge badge-pill badge-primary">Branding</span>
                    <span class="badge badge-pill badge-danger">Design</span>
                </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Recent Buyers</h4>
                            <a class="heading-elements-toggle">
                                <i class="fa fa-ellipsis-v font-medium-3"></i>
                            </a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li>
                                        <a data-action="reload">
                                            <i class="ft-rotate-cw"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div id="recent-buyers" class="media-list">
                                <a href="#" class="media border-0">
                                    <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-online">
                                <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-7.png" alt="Generic placeholder image">
                                <i></i>
                            </span>
                                    </div>
                                    <div class="media-body w-100">
                            <span class="list-group-item-heading">Kristopher Candy

                            </span>
                                        <ul class="list-unstyled users-list m-0 float-right">
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="../../../app-assets/images/portfolio/portfolio-1.jpg"
                                                     alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 2" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="../../../app-assets/images/portfolio/portfolio-2.jpg"
                                                     alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 3" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="../../../app-assets/images/portfolio/portfolio-4.jpg"
                                                     alt="Avatar">
                                            </li>
                                        </ul>
                                        <p class="list-group-item-text mb-0">
                                            <span class="blue-grey lighten-2 font-small-3"> #INV-12332 </span>
                                        </p>
                                    </div>
                                </a>
                                <a href="#" class="media border-0">
                                    <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-away">
                                <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-8.png" alt="Generic placeholder image">
                                <i></i>
                            </span>
                                    </div>
                                    <div class="media-body w-100">
                            <span class="list-group-item-heading">Lawrence Fowler

                            </span>
                                        <ul class="list-unstyled users-list m-0 float-right">
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="../../../app-assets/images/portfolio/portfolio-5.jpg"
                                                     alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 2" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="../../../app-assets/images/portfolio/portfolio-6.jpg"
                                                     alt="Avatar">
                                            </li>
                                        </ul>
                                        <p class="list-group-item-text mb-0">
                                            <span class="blue-grey lighten-2 font-small-3"> #INV-12333 </span>
                                        </p>
                                    </div>
                                </a>
                                <a href="#" class="media border-0">
                                    <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-busy">
                                <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-9.png" alt="Generic placeholder image">
                                <i></i>
                            </span>
                                    </div>
                                    <div class="media-body w-100">
                            <span class="list-group-item-heading">Linda Olson

                            </span>
                                        <ul class="list-unstyled users-list m-0 float-right">
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="../../../app-assets/images/portfolio/portfolio-2.jpg"
                                                     alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 2" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="../../../app-assets/images/portfolio/portfolio-5.jpg"
                                                     alt="Avatar">
                                            </li>
                                        </ul>
                                        <p class="list-group-item-text mb-0">
                                            <span class="blue-grey lighten-2 font-small-3"> #INV-12334 </span>
                                        </p>
                                    </div>
                                </a>
                                <a href="#" class="media border-0">
                                    <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-online">
                                <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-10.png" alt="Generic placeholder image">
                                <i></i>
                            </span>
                                    </div>
                                    <div class="media-body w-100">
                            <span class="list-group-item-heading">Roy Clark

                            </span>
                                        <ul class="list-unstyled users-list m-0 float-right">
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="../../../app-assets/images/portfolio/portfolio-6.jpg"
                                                     alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 2" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="../../../app-assets/images/portfolio/portfolio-1.jpg"
                                                     alt="Avatar">
                                            </li>
                                        </ul>
                                        <p class="list-group-item-text mb-0">
                                            <span class="blue-grey lighten-2 font-small-3"> #INV-12335 </span>
                                        </p>
                                    </div>
                                </a>
                                <a href="#" class="media border-0">
                                    <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-online">
                                <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-11.png" alt="Generic placeholder image">
                                <i></i>
                            </span>
                                    </div>
                                    <div class="media-body w-100">
                            <span class="list-group-item-heading">Kristopher Candy

                            </span>
                                        <ul class="list-unstyled users-list m-0 float-right">
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="../../../app-assets/images/portfolio/portfolio-5.jpg"
                                                     alt="Avatar">
                                            </li>
                                        </ul>
                                        <p class="list-group-item-text mb-0">
                                            <span class="blue-grey lighten-2 font-small-3"> #INV-12336 </span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Statistics -->



    @stop