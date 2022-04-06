<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('productName');
            $table->double('price',8,2);
            $table->integer('barcode');
            $table->foreignId('supplier_id')
            ->references('id')->on('suppliers')
            ->comment('Relacion con tabla supplier');

            $table->foreignId('user_id')
            ->references('id')->on('users')
            ->comment('Relacion con tabla Usuarios');
            /* $table->string('product_description');
            $table->string('product_unit_price');
            $table->foreignId('providercode')->references('code')->on('proveedors'); */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
