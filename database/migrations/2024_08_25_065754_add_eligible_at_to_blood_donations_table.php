<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEligibleAtToBloodDonationsTable extends Migration
{
    public function up()
    {
        Schema::table('blood_donations', function (Blueprint $table) {
            $table->date('eligible_at')->nullable();
        });
    }

    public function down()
    {
        Schema::table('blood_donations', function (Blueprint $table) {
            $table->dropColumn('eligible_at');
        });
    }
}

