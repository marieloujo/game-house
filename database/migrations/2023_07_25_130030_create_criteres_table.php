<?php

use App\Enums\Forme;
use App\Enums\Preference;
use App\Enums\Taille;
use App\Enums\Teint;
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
        Schema::create('criteres', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('user_id')->nullable()
                    ->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->enum("preference", Preference::array())->nullable();
            $table->enum("teint", Teint::array())->nullable();
            $table->enum("taille", Taille::array())->nullable();
            $table->enum("forme", Forme::array())->nullable();

            $table->integer('age_min')->min(18);
            $table->integer('age_max')->max(90);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
