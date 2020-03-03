<table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Cantidad</th>
        <th>Estado</th>
        <th>Vendedor</th>
        <th>Opciones</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
    
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>{{$producto->cantidad}}</td>

            @if ($producto->estado == '0')
              <td>Inactivo</td>
            
            @else
              <td>Activo</td>
               
            @endif
            <td>{{$producto->vendedor}}</td>
            <td class="btn btn-group">
            <a href="{{route('getProducto', $producto->idProducto)}}" title="Editar"  class="btn btn-primary btnEditar">
                <i class="fa fa-edit"></i></a>
            <form method="POST" action="{{route('deleteProducto', $producto->idProducto)}}">
              {!! method_field('DELETE') !!}    
              {!! csrf_field() !!}
              <button title="Eliminar"  class="btn btn-danger btnEliminar">
                <i class="fa fa-remove"></i></button>
            </form>
                
            </td>
          </tr>
        @endforeach
     
   
    </tbody>
  </table>