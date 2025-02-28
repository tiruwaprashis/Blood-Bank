<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsHiddenToBloodDonationsTable extends Migration
{
    public function up()
    {
        Schema::table('blood_donations', function (Blueprint $table) {
            $table->boolean('is_hidden')->default(false);
        });
    }

    public function down()
    {
        Schema::table('blood_donations', function (Blueprint $table) {
            $table->dropColumn('is_hidden');
        });
    }
}
