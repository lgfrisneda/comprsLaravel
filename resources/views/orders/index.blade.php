@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Ordenes Registradas</div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Dirección</th>
                                <th>Producto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->address->description }}</td>
                                <td>{{ $order->product->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $orders->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
