<?php namespace Liip\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLiipEventsEvents extends Migration
{
    public function up()
    {
        Schema::create('liip_events_events', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->boolean('is_published')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('liip_events_events');
    }
}
