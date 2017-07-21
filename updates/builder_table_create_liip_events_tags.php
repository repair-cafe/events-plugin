<?php namespace Liip\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLiipEventsTags extends Migration
{
    public function up()
    {
        Schema::create('liip_events_tags', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('liip_events_tags');
    }
}
