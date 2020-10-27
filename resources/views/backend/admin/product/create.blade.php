@extends('layout.app')
@section('contents')
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="height: 871.5px;">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-round-controls">Round Style Form Control</h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>

                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <div class="card-text">
                            <p>This is a variation to the default form control styling. In this example all the form
                                controls has round styling.
                                To apply round style add class
                                <code>round</code> to any form control.</p>
                        </div>
                        <form class="form" action="{{route('admin.product.store')}}" method="post">
                            @csrf()
                            <div class="form-body">
                                <div class="form-group">
                                    <label for="complaintinput1">Product Name</label>
                                    <input type="text" id="complaintinput1" class="form-control round"
                                           placeholder="company name" name="product_name">
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput2">Brand Name</label>
                                    <input type="text" id="complaintinput2" class="form-control round"
                                           placeholder="employee name" name="brand_name">
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput2">Price</label>
                                    <input type="text" id="complaintinput2" class="form-control round"
                                           placeholder="employee name" name="price">
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput2">Model No</label>
                                    <input type="text" id="complaintinput2" class="form-control round"
                                           placeholder="employee name" name="modal_no">
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput5">Product Description</label>
                                    <textarea id="complaintinput5" rows="5" class="form-control round"
                                              name="description" placeholder="details"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput6">Certification</label>
                                    <input type="text" id="complaintinput6" class="form-control round"
                                           placeholder="signature" name="certification">
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput6">Supply Time</label>
                                    <input type="text" id="complaintinput6" class="form-control round"
                                           placeholder="signature" name="supply_time">
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput6">Place of Origin</label>
                                    <input type="text" id="complaintinput6" class="form-control round"
                                           placeholder="signature" name="placeoforigin">
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput6">Shelf Life</label>
                                    <input type="text" id="complaintinput6" class="form-control round"
                                           placeholder="signature" name="shelf_life">
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput6">Port</label>
                                    <input type="text" id="complaintinput6" class="form-control round"
                                           placeholder="signature" name="port">
                                </div>
                                {{--<div class="form-group">--}}
                                    {{--<label for="complaintinput6">Video</label>--}}
                                    {{--<input type="text" id="complaintinput6" class="form-control round"--}}
                                           {{--placeholder="signature" name="video">--}}
                                {{--</div>--}}
                                <div class="form-group">
                                    <label for="complaintinput6">Status</label>
                                    <input type="text" id="complaintinput6" class="form-control round"
                                           placeholder="signature" name="active">
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput6">Inventory</label>
                                    <input type="text" id="complaintinput6" class="form-control round"
                                           placeholder="signature" name="inventory">
                                </div>

                                <div class="form-group">
                                    <label for="complaintinput6">Supply Ability</label>
                                    <input type="text" id="complaintinput6" class="form-control round"
                                           placeholder="signature" name="supply_ability">
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput6">Packaging Details</label>
                                    <input type="text" id="complaintinput6" class="form-control round"
                                           placeholder="signature" name="packaging_detail">
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput6">Weight</label>
                                    <input type="text" id="complaintinput6" class="form-control round"
                                           placeholder="signature" name="weight">
                                </div>
                                {{--<div class="form-group">--}}
                                    {{--<label for="complaintinput6">Category</label>--}}
                                    <input type="hidden" id="complaintinput6" class="form-control round"
                                           placeholder="signature" name="seller_id" value="1">
                                {{--</div>--}}

                            </div>

                            <div class="form-actions">
                                <button type="button" class="btn btn-danger mr-1">
                                    <i class="ft-x"></i> Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop