<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('categories')) {
            // Code to create table
            Schema::create('categories', function (Blueprint $table) {
                $table->id();
                $table->integer('ID');
                $table->string('name');
                $table->integer('parent_id');
                $table->boolean('active');
                $table->dateTime('created_at');
                $table->dateTime('updated_at');
            });
        }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
