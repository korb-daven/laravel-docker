<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('name', 255);
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->double('pricing');
            $table->text('description')->nullable();
            $table->text('images')->nullable();
            // $table->timestamp('deleted_at')->useCurrent();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
