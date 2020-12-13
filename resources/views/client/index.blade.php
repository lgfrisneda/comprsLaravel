@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mis Datos</div>

                <div class="panel-body">
                    <strong>Id: </strong>{{ $mydata->id }}<br>
                    <strong>Nombre: </strong>{{ $mydata->name }}<br>
                    <strong>Email: </strong>{{ $mydata->email }}<br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
