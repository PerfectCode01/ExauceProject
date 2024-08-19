<?php

use App\Models\Cour;
use App\Models\Matrice;
use App\Models\Categorie;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tutoriels', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->longText('description');
            // $table->string('video_url');
            $table->string('matrice');
            $table->foreignIdFor(Categorie::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutoriels');
    }
};
