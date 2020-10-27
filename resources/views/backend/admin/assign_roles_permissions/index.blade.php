@extends('layout.app')
@section('contents')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Roles</h4>
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
                        <p>Below Table contains list of roles
                            <a href="{{route('admin.roles.index')}}" class="float-right mx-1">
                                <i class="ft-users text-success" style="font-size: 30px;"></i>
                            </a>
                            <a href="{{route('admin.permissions.create')}}">
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
                                    <th>User</th>
                                    <th>Roles</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <th scope="row">{{$loop->index+1}}</th>
                                        <td>{{$user->name}}</td>
{{--                                        <td>{{$user->getRoleNames()}}</td>--}}
                                        <td>
                                        @foreach($user->getRoleNames() as $role)

                                                    {{$role.","}}

                                            @endforeach
                                        </td>
                                        <td>{{$user->created_at}}</td>
                                        <td>
                                            <a href="{{route('admin.assign-roles-and-permissions.edit', $user->id)}}">
                                                <i class="ft-eye" style="font-size: 25px;"></i></a>
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