<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZakatType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zakat_types', function (Blueprint $table) {
            $table->integer('zakat_type');
            $table->string('zakat_name');
        });
        DB::table('zakat_types')->insert([
            ['zakat_type' => 1, 'zakat_name' => 'Pendapatan'],
            ['zakat_type' => 2, 'zakat_name' => 'Perniagaan'],
            ['zakat_type' => 3, 'zakat_name' => 'Saham'],
            ['zakat_type' => 4, 'zakat_name' => 'Harta'],
            ['zakat_type' => 5, 'zakat_name' => 'Wang Simpanan'],
            ['zakat_type' => 6, 'zakat_name' => 'Emas'],
            ['zakat_type' => 7, 'zakat_name' => 'Perak'],
            ['zakat_type' => 8, 'zakat_name' => 'Pertanian'],
            ['zakat_type' => 9, 'zakat_name' => 'Ternakan'],
            ['zakat_type' => 10, 'zakat_name' => 'Rikaz'],
            ['zakat_type' => 11, 'zakat_name' => 'Qadha\''],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zakat_types');
    }
}
