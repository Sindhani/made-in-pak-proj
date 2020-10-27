@extends('layout.app')
@section('title', 'Products')
@section('contents')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Products</h4>
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
                    <div class="card-body">
                        <p>Below Table contains list of Products
                            <a href="{{route('admin.product.create')}}">
                            <span class="float-right">

                                <i class="ft-plus-circle text-success" style="font-size: 30px;"></i>
                        </span>
                            </a>
                        </p>
                        @if(Session::has('error'))
                            <p class="alert alert-danger">{{ Session::get('error') }}</p>
                        @else
                            <p class="alert alert-success">{{ Session::get('success') }}</p>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Retail Price</th>
                                    <th>Sale Price</th>
                                    <th>Availability</th>
                                    <th>Visibility</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <th scope="row">{{$loop->index+1}}</th>
                                        <td>{{$product->product_name}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>sale_price</td>
                                        <td>{{$product->inventory}}</td>
                                        <td>visibility</td>
                                        <td>actions</td>
                                        <td>
                                            <a href="{{route('admin.product.edit', $product)}}"><i
                                                        class="ft-edit-3" style="font-size: 25px;"></i></a>
                                            <form action="{{route('admin.product.destroy', $product->id)}}"
                                                  method="post">
                                                @csrf()
                                                @method('delete')
                                                <button type="submit"><i class="ft-trash text-danger"
                                                                         style="font-size: 25px;"></i></button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@stop