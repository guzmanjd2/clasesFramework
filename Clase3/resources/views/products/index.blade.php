@extends('layouts.app')

@section('css')
@endsection

@section('buttons')
   <!--<a class="btn btn-primary mr-2" href="{{ 'products/create' }}">Crear Productos</a>-->
   <a class="btn btn-primary mr-2" href="{{ route('products.create') }}">Crear Productos</a>
@endsection

@section('content')


<h2 class="text-center mb-5">
    Administracion de productos
</h2>
<div class="col-md-10 mx-auto bg-white p-3">
    <table class="table">
        <thead class="bg-primary text-light">
            <tr>
                <th scole="col">Codigo</th>
                <th scole="col">Nombre</th>
                <th scole="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</div>


{{-- @foreach ($productosList as $product) 
    <li> {{$product}} </li>
@endforeach --}}


{{-- @foreach ($proveedoresList as $proveedor) 
    <li> {{$proveedor}} </li>
@endforeach --}}
@endsection

@section('js')
@endsection
