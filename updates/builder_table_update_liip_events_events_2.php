<?php namespace Liip\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLiipEventsEvents2 extends Migration
{
    public function up()
    {
        Schema::table('liip_events_events', function($table)
        {
            $table->integer('user_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('liip_events_events', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
