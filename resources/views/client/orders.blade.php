@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mis Ordenes</div>

                <div class="panel-body">
                    @foreach( $myorders as $order)
                        <strong>Id: </strong>{{ $order->id }}<br>
                        <strong>Direccion: </strong>{{ $order->address_id }}<br>
                        <strong>Producto: </strong>{{ $order->product_id }}<br>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
