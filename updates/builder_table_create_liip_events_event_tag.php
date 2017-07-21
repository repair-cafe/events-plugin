<?php namespace Liip\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLiipEventsEventTag extends Migration
{
    public function up()
    {
        Schema::create('liip_events_event_tag', function ($table) {
            $table->engine = 'InnoDB';
            $table->integer('event_id');
            $table->integer('tag_id');
            $table->primary(['event_id','tag_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('liip_events_event_tag');
    }
}
