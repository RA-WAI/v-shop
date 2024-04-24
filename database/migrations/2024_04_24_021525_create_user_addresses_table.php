<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
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
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('type', 45);
            $table->string('address1', 255);
            $table->string('address2', 255)->nullable();
            $table->string('city', 45);
            $table->string('state', 45)->nullable();
            $table->string('zip_code', 45)->nullable();
            $table->boolean('is_main', 45)->default(1);
            $table->boolean('country_code', 3)->nullable();
            $table->foreignIdFor(User::class)->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('user_addresses');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
