@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Direcciones Registradas</div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>usuario</th>
                                <th>direccion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($addresses as $address)
                            <tr>
                                <td>{{ $address->id }}</td>
                                <td>{{ $address->user->name }}</td>
                                <td>{{ $address->description }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $addresses->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
