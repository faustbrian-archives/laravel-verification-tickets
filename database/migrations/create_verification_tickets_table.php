<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerificationTicketsTable extends Migration
{
    public function up()
    {
        Schema::create('verification_tickets', function (Blueprint $table) {
            $table->id();
            $table->morphs('verifiable');
            $table->string('type');
            $table->string('code');
            $table->boolean('is_completed')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('verification_tickets');
    }
}
