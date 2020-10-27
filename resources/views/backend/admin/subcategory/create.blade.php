@extends('layout.app')
@section('contents')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="horz-layout-card-center">Center Aligned Horizontal Form</h4>
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
                <div class="card-content collpase show">
                    <div class="card-body">
                        <div class="card-text">
                            <p>
                                Create a new SubCategory for user.
                                <a href="{{route('admin.subcategory.index')}}"><span class="float-right">View All SubCategorys
                                            <i class="ft-eye text-success " style="font-size: 25px;"></i>
                                        </span></a>
                            </p>
                            @if(Session::has('error'))
                                <p class="alert alert-danger">{{ Session::get('error') }}</p>
                            @else
                                <p class="alert alert-success">{{ Session::get('success') }}</p>
                            @endif
                        </div>
                        <form class="form form-horizontal" action="{{route('admin.subcategory.store')}}" method="post">
                            @csrf()
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="LargeSelect">Sub Category Name</label>
                                    <fieldset class="form-group position-relative">
                                        <select class="form-control input-lg" id="LargeSelect" name="category_id">
                                            <option selected="" disabled>Select Category</option>
                                            @foreach($categories as $category)
                                                <option value={{$category->id}}>{{$category->name}}</option>
                                                @endforeach

                                        </select>
                                    </fieldset>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput1">Sub Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" id="eventRegInput1" class="form-control"
                                               placeholder="Hush Puppies.." name="name">
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions center">
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