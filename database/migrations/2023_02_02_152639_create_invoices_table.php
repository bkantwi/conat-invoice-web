<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sename', 50)->nullable();
            $table->string('semail', 50)->nullable();
            $table->string('sephone', 20)->nullable();
            $table->string('seaddress', 100)->nullable();
            $table->string('selogo', 100)->nullable();
            $table->string('rename', 50)->nullable();
            $table->string('remail', 50)->nullable();
            $table->string('rephone', 20)->nullable();
            $table->string('readdress', 100)->nullable();
            $table->string('payment_method', 15)->nullable();
            $table->string('item', 200)->nullable();
            $table->string('amount', 5)->nullable();
            $table->string('cost', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};
