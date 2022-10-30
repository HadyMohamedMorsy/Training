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
            
            $table->id();
            $table->string('invoice_number'); 
            $table->date('invoice_Date'); 
            $table->date('due_date'); 
            $table->unsignedBigInteger('section_id');
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->string('product');
            $table->decimal('amount_Collection')->nullable(); 
            $table->decimal('amount_Commission'); 
            $table->decimal('value_vat' , 8 , 2); 
            $table->decimal('total', 8 , 2); 
            $table->string('rate_value'); 
            $table->string('status'); 
            $table->integer('value_status');
            $table->text('note')->nullable();
            $table->date('payment_Date')->nullable();
            $table->string('user');
            $table->softDeletes();
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
