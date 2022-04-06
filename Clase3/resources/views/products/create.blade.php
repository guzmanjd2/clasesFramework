@extends('layouts.app')

@section('css')
@endsection

@section('buttons')
   <!--<a class="btn btn-primary mr-2" href="{{ 'products/create' }}">Crear Productos</a>-->
   <a class="btn btn-primary mr-2" href="{{ route('products.index') }}">Regresar</a>
@endsection

@section('content')

<h2 class="text-center mb-5">
    Crear producto
</h2>
{{$suppliers}}
<div class="row justify-content-center">
    <div class="col-md-8">
        <form method="post" action="{{ route('products.store') }}" novalidate   >
            @csrf
            <div class="row mb-3">
                <label for="productName">Titulo Producto</label>

                <div class="col-md-6">
                    <input type="text"
                    name="productName"
                    class="form-control @error('productName') is-invalid @enderror"
                    value="{{old('productName')}}"
                    id="productName"
                    placeholder="Nombre del producto" >
                    @error('productName') 
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> 
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="supplier">Proveedores</label>
                <div class="col-md-6">
                    <select name="supplier" class="form-control" id="supplier">
                        @foreach($suppliers as $id =>$supplier)
                            <option value="{{ $id }}">{{ $supplier }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Agregar Producto">
            </div>
        </form>
    </div>
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
