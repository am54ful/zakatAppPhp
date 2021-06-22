<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictCode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('district_codes', function (Blueprint $table) {
            $table->integer('district_code');
            $table->string('district_name');
        });
        DB::table('district_codes')->insert([
            ['district_code' => 1, 'district_name' => 'KUANTAN'],
            ['district_code' => 2, 'district_name' => 'PEKAN'],
            ['district_code' => 3, 'district_name' => 'TEMERLOH'],
            ['district_code' => 4, 'district_name' => 'ROMPIN'],
            ['district_code' => 5, 'district_name' => 'MARAN'],
            ['district_code' => 6, 'district_name' => 'BENTONG'],
            ['district_code' => 7, 'district_name' => 'LIPIS'],
            ['district_code' => 8, 'district_name' => 'LIPIS'],
            ['district_code' => 9, 'district_name' => 'CAM. HIGHLANDS'],
            ['district_code' => 10, 'district_name' => 'BERA'],
            ['district_code' => 11, 'district_name' => 'RAUB'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('district_codes');
    }
}
