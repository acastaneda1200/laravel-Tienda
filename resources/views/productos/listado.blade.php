<table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Cantidad</th>
        <th>Estado</th>
        <th>Vendedor</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>{{$producto->cantidad}}</td>
            <td>{{$producto->estado}}</td>
          </tr>
        @endforeach
     
   
    </tbody>
  </table>