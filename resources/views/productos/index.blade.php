@extends('layouts.app')

@section('content')

<form class="" action="p">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Mantener Productos</div>
                        <div class="panel-body">
                                <div class="form-group col-md-4">
                                        <label for="exampleInputPassword1">Nombre</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="form-group col-md-4">
                                        <label for="exampleInputPassword1">Descripcion</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Cantidad</label>
                                        <input type="number" class="form-control" id="exampleInputPassword1">
                                </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </form>
@endsection