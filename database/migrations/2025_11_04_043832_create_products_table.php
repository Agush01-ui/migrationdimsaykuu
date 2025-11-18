<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // id produk
            $table->string('name'); // nama produk
            $table->text('description')->nullable(); // deskripsi produk
            $table->decimal('price', 10, 2); // harga produk
            $table->integer('stock')->default(0); // jumlah stok
            $table->string('image')->nullable(); // nama file gambar produk
            $table->boolean('is_active')->default(true); // status aktif/tidak
            
            $table->softDeletes(); // << WAJIB untuk Soft Delete
            
            $table->timestamps(); // created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
