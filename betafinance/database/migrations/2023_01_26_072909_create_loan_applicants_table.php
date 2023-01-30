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
        Schema::create('LoanApplicants', function (Blueprint $table) {
            $table->increments('uid');
            $table->string('name');
            $table->string('dob');
            $table->string('id');
            $table->string('idnum');
            $table->string('bvn');
            $table->string('email');
            $table->string('phone');
            $table->string('bank');
            $table->string('account');
            $table->string('loanamount');
            $table->string('paymentRef')->nullable();
            $table->string('monnifyRef')->nullable();
            $table->string('paid')->nullable();
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
        Schema::dropIfExists('loan_applicants');
    }
};
