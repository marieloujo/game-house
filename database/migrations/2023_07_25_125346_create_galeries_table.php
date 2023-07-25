<?php

use App\Enums\CategorieGalerie;
use App\Enums\TypeFile;
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
        Schema::create('galeries', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('user_id')->nullable()
                    ->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->string("url");

            $table->enum("type_fichier", TypeFile::array())
                ->default(TypeFile::IMAGE->value);

            $table->enum("categorie", CategorieGalerie::array())
                ->default(CategorieGalerie::AUTRE->value);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeries');
    }
};
