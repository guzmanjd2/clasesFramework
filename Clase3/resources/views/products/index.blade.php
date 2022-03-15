<h1>PRODUCTOS</h1>

@foreach ($productosList as $product) 
    <li> {{$product}} </li>
@endforeach

<h1>PROVEEDORES</h1>

@foreach ($proveedoresList as $proveedor) 
    <li> {{$proveedor}} </li>
@endforeach