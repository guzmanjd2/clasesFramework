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
        <form method="post" 
        action="{{ route('products.store') }}"
         novalidate enctype="multipart/form-data" >
            @csrf
            <div class="row mb-3">
                <label for="productName">Titulo Producto</label>

                <div class="col-md-6">
                    <input type="text"
                    name="productName"
                    class="form-control @error('productName') is-invalid
                    @enderror"
                    id="productName"
                    placeholder="Nombre del producto" 
                    value="{{old('productName')}}">
                    @error('productName') 
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> 
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="price">Precio</label>
                <div class="col-md-6">
                    <input type="text"
                    name="price"
                    class="form-control @error('price') is-invalid 
                    @enderror"
                    id="price"
                    placeholder="Precio del producto"
                    value="{{old('price')}}"/>
                    @error('price')
                        <span class="invalid-feedback d-block" 
                        role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="barcode">Codigo de barra</label>
                <div class="col-md-6">
                    <input type="text"
                    name="barcode"
                    class="form-control @error('barcode') 
                    is-invalid @enderror"
                    id="barcode"
                    placeholder="Codigo de barra"
                    value="{{old('barcode')}}"/>
                    @error('barcode')
                        <span class="invalid-feedback d-block" 
                        role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="supplier">Proveedores</label>
                <div class="col-md-6">
                    <select name="supplier" class="form-control
                    @error('supplier') is-invalid @enderror"
                     id="supplier">
                            <option>Seleccione---</option>
                        @foreach($suppliers as $id =>$supplier)
                            <option value="{{ $id }}" 
                            {{old('supplier')==$id ? 'selected':
                             ''}}>
                                {{ $supplier }}</option>
                        @endforeach
                    </select>
                    @error('supplier')
                        <span class="invalid-feedback d-block" 
                        role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="price">Seleccione una imagen para el producto</label>
                <div class="col-md-6">
                    <input type="file"
                    name="image"
                    class="form-control @error('image') 
                    is-invalid @enderror"
                    id="image"
                    placeholder="Seleccione una imagen"
                    value="{{old('image')}}"/>
                    @error('image')
                        <span class="invalid-feedback d-block" 
                        role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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
