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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('profession');
            $table->timestamp('image');
            $table->string('description');
              $table->timestamps();

            // $table->id();
            // $table->string('name');
            // $table->string('first_name')->nullable();
            // $table->string('last_name')->nullable();
            // $table->string('username')->nullable();
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->string('avatar')->nullable()->default('img/default-avatar.jpg');
            // $table->tinyInteger('status')->default(1)->unsigned();
            // $table->rememberToken();
            // $table->integer('created_by')->unsigned()->nullable();
            // $table->integer('updated_by')->unsigned()->nullable();
            // $table->integer('deleted_by')->unsigned()->nullable();
            // $table->timestamps();
            // $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
