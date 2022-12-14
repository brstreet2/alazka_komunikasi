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
        Schema::create('banner', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('');
            $table->text('description')->nullable('');
            $table->string('image')->default('');
            $table->boolean('publish')->default(0);
            $table->string('created_by')->default('');
            $table->string('updated_by')->default('');
            $table->string('deleted_by')->default('');
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
        Schema::dropIfExists('banner');
    }
};
