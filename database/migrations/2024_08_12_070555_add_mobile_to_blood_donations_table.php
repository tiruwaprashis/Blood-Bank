<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMobileToBloodDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blood_donations', function (Blueprint $table) {
            $table->string('mobile')->after('email'); // Add mobile column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blood_donations', function (Blueprint $table) {
            $table->dropColumn('mobile'); // Remove mobile column
        });
    }
}

