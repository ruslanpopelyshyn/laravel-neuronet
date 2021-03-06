<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1557311369CalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('calendars', function (Blueprint $table) {
            if(Schema::hasColumn('calendars', 'location_address')) {
                $table->dropColumn('location_address');
                $table->dropColumn('location_latitude');
                $table->dropColumn('location_longitude');
            }
            
        });
Schema::table('calendars', function (Blueprint $table) {
            
if (!Schema::hasColumn('calendars', 'location')) {
                $table->string('location')->nullable();
                }
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('calendars', function (Blueprint $table) {
            $table->dropColumn('location');
            
        });
Schema::table('calendars', function (Blueprint $table) {
                        $table->string('location_address')->nullable();
                $table->double('location_latitude')->nullable();
                $table->double('location_longitude')->nullable();
                
        });

    }
}
