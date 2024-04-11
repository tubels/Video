<?php

use App\Models\Playlist;
use App\Models\Video;
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
        Schema::create('video_playlist', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Video::class);
            $table->foreignIdFor(Playlist::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_playlist');
    }
};
