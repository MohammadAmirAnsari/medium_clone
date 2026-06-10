<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('posts')->update([
            'image' => DB::raw("CONCAT('https://picsum.photos/600/400?random=',FLOOR(RAND()*200+1))")
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('posts')->update([
            'image' => null
        ]);
    }
};
