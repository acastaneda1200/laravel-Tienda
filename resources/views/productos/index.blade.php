@extends('layouts.app')

@section('content')
<div class="row">
<div class="container">
        <form action="{{route('productosAgregar')}}" method="POST">
        
                {!! csrf_field() !!}

                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Mantener Productos</div>
                        <div class="panel-body">
                                <div class="form-group col-md-4">
                                        <label for="exampleInputPassword1">Nombre</label>
                                        <input type="text" name="nombre" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="form-group col-md-4">
                                        <label for="exampleInputPassword1">Descripcion</label>
                                        <input type="text" name="descripcion" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Cantidad</label>
                                        <input type="number" name="cantidad" class="form-control" id="exampleInputPassword1">
                                </div>
                                <input type="hidden" name="usuario" value="{{ Auth::user()->id }}">

                                <div class="col-md-8 ">
                                    <button type="submit" class="btn btn-primary">
                                    Agregar
                                </button> 
                                </div>
                        </div>
                    </div>
                </div>
            </form>
            @include('productos.listado')
</div>
</div>

         
            
@endsection


