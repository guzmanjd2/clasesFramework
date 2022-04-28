<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;


class ProductController extends Controller
{
    //Se agrega en cada controlador para autenticar y
    //proteger las vistas permitiendo que todo usuario
    //que acceda a las mi sitio debe estar autenticado
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mostrar(){
        return ('desde el controlador');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // DB::table('suppliers')->get()->dd(); --retorna los proveedores
       $suppliers = DB::table('suppliers')->get()->pluck('supplierName','id');
        return view('products.create')->with('suppliers',$suppliers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request['image']->
       // store('upload-productos','public'));
       // $data=request();
        //tabla a la que le queremos insertar registros
        $data=request()->validate([
            'productName'=>'required|min:5|max:50',
            'price'=>'required',
            'barcode'=>'required|min:5|max:8',
            'supplier'=>'required',
            'image'=>'required|image'
        ]);

        $ruta_imagen=$request['image']->
        store('upload-productos','public');

        $img=Image::make(
            public_path("storage/{$ruta_imagen}"))->
            fit(1000,550);
        $img->save();
        
        DB::table('products')->insert([
            'productName'=>$data['productName'],
            'price'=>$data['price'],
            'barcode'=>$data['barcode'],
            'image'=>$ruta_imagen,
            'supplier_id'=>$data['supplier'],
            'user_id'=>Auth::user()->id
        ]);
        return view('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
