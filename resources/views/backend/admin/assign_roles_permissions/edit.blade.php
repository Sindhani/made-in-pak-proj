@extends('layout.app')
@section('contents')
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="height: 600px;">
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title">Roles</h4>
                        <h6 class="card-subtitle text-muted">Select a Roles from the dropdown</h6>
                    </div>
                    <div class="card-body">

                            <fieldset class="form-group position-relative">
                                <select class="form-control input-lg" id="LargeSelect" form="permissionsForm" name="roles">
                                    @foreach($roles as $role)
                                    <option value={{$role->id}}>{{$role->name}}</option>
                                    @endforeach
                                 </select>
                            </fieldset>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card" style="height: 665px;">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-colored-form-control">Form with Bordered Controls</h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li>
                                <a data-action="collapse">
                                    <i class="ft-minus"></i>
                                </a>
                            </li>
                            <li>
                                <a data-action="reload">
                                    <i class="ft-rotate-cw"></i>
                                </a>
                            </li>
                            <li>
                                <a data-action="expand">
                                    <i class="ft-maximize"></i>
                                </a>
                            </li>
                            <li>
                                <a data-action="close">
                                    <i class="ft-x"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">

                        <div class="card-text">
                            <p>You can always change the border color of the form controls using
                                <code>border-*</code> class.</p>
                        </div>
                        <form class="form" id="permissionsForm" action="{{route('admin.assign-roles-and-permissions.update', $user->id)}})}}" method="post">
                            @method('put')
                            @csrf
                            <div class="form-body">

                                <h4 class="form-section">
                                    <i class="ft-briefcase"></i> Contact Details</h4>
                                @foreach($permissions as $permission)
                                <div class="">
                                    <input type="checkbox" value="{{$permission->id}}" id="input-12" name="permissions[]">
                                    <label for="input-12" class="">{{$permission->name}}</label>
                                </div>
                                    @endforeach
                            </div>

                            <div class="form-actions right">
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
