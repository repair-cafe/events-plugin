<?php namespace Liip\Events;

use Liip\Events\Components\EventList;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            EventList::class => 'eventList'
        ];
    }

    public function registerSettings()
    {
    }
}
