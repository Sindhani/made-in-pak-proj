@extends('layout.app')
@section('contents')
    <x-user-table-component>
        @foreach($users as $user)
            <td>firstname</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>address</td>
            <form action="{{route('admin.sellers.update', $user->id)}}" method="post">
                @csrf
                @method('put')
            <td>

                    <input type="checkbox" class="js-switch" onchange="checkStatus('status');" {{$user->status=='1' ? 'checked' : ''}} name="status" value="1" id="status"/>


            </td>
            <td><input type="checkbox" class="js-switch" onchange="checkStatus('suspended');" {{$user->suspended=='1' ? 'checked' : ''}} name="suspended" value="1" id="suspended"/></td>
            <td>other</td>
            <td>
                <a href="{{route('profile.show')}}  "> <i class="ft-edit-3 text-info mr-3" style="font-size: 30px;"></i></a>
                <i class="ft-user-x text-danger" style="font-size: 30px;"></i>
                <button type="submit">Update</button>
            </td>
            </form>
        @endforeach
    </x-user-table-component>
@stop
@section('js')
    <script>
        function checkStatus(status){
            $('#'+status).on('change',function(){
                if($(this).is(':checked')){
                    $(this).val("1");
                }
                else {
                    $(this).val('0')
                }
            });
        }
    </script>

    @stop