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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('title');
            $table->string('slug');
            $table->longtext('content');
            $table->string('image');
            $table->string('tags');
            $table->bigInteger('p_status')->default('0');
            $table->string('r_date')->nullable();
            $table->longtext('AdminRemark')->nullable();
            $table->string('AdminRemarkDate')->nullable();
            $table->bigInteger('admin_read')->default('0');
            $table->string('admin_read_Date')->nullable();
            $table->bigInteger('thumb')->default('0');
            $table->bigInteger('views')->default('0');
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
        Schema::dropIfExists('articles');
    }
};
