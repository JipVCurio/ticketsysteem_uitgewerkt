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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('qr_code_id');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('event_id');
            $table->decimal('price');
            $table->timestamps();

            $table->foreign('qr_code_id')->references('id')->on('qr_codes');
            $table->foreign('event_id')->references(columns: 'id')->on('events');
            $table->foreign('order_id')->references(columns: 'id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tickets', function(Blueprint $table) {
            $table->dropForeign('tickets_qr_code_id_foreign');
            $table->dropForeign('tickets_event_id_foreign');
            $table->dropForeign('tickets_order_id_foreign');
        });

        Schema::dropIfExists('tickets');
    }
};
