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
        Schema::table('news_requests', function (Blueprint $table) {
            $table->string('attachment_path')->nullable()->after('age_limit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('news_requests', function (Blueprint $table) {
            $table->dropColumn('attachment_path');
        });
    }
};
