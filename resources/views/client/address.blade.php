@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mi(s) Direccion(es)</div>

                <div class="panel-body">
                    @foreach( $myaddresses as $myaddress)
                        <strong>Id: </strong>{{ $myaddress->id }}<br>
                        <strong>Description: </strong>{{ $myaddress->description }}<br>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
