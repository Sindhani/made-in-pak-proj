@extends('layout.app')
@section('contents')
    <x-user-table-component >
        @foreach($users as $user)
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->email}}</td>
            <td>address</td>
            <td>status</td>
            <td>
                <form>
                    <input type="checkbox" class="js-switch" checked/>
                </form>
            </td>
            <td>
                <form>
                    <input type="checkbox" class="js-switch" checked/>
                </form>
            </td>
            <td>
                <i class="ft-edit-3 text-info mr-3" style="font-size: 30px;"></i>
                <i class="ft-user-x text-danger" style="font-size: 30px;"></i>
            </td>
            @endforeach
    </x-user-table-component>
@stop
@section('js')
    @stop