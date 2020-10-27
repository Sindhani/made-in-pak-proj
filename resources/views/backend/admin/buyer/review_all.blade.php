@extends('layout.app')
@section('contents')
<div class="container">

</div>
<div class="card">
    <img class="card-img-top" data-src="holder.js/100x180/?text=Image cap" alt="Card image cap">
    <div class="card-body">
        <h4 class="card-title">Review System</h4>
    </div>
    <ul class="list-group list-group-flush">
        @foreach ($reviews as $item)
        <table>
            <td>
                ******** {{$item->description}}
            </td>
        </table>

        @endforeach
    </ul>
</div>
@endsection
