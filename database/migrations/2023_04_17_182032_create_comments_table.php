<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
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
        Schema::create('comments', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';

            $table->id();
            $table->text('description');
            $table->string('name');
            $table->ipAddress()->nullable();
            $table->foreignId('post_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->json('images')->nullable();
            $table->json('data')->nullable();
            $table->tinyInteger('visibility')->default(1);
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
		Schema::drop('comments');
	}
};
