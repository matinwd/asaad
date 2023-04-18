<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table) {
            $table->increments('id');

            $table->foreignId('user_id')->constrained()->nullOnDelete()->cascadeOnUpdate();

            // Todo -- Add these fields to translation table
            $table->text('description');

            // Todo -- make this shit cleaner later :)
            $table->foreignId('post_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->json('data');

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
