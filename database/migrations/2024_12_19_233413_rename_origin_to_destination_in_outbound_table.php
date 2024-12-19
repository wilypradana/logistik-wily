<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameOriginToDestinationInOutboundTable extends Migration
{
    public function up()
    {
        Schema::table('outbounds', function (Blueprint $table) {
            $table->renameColumn('origin', 'destination');
        });
    }

    public function down()
    {
        Schema::table('outbounds', function (Blueprint $table) {
            $table->renameColumn('destination', 'origin');
        });
    }
}