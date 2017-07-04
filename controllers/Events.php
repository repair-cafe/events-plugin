<?php namespace Liip\Events\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Events extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'events.events' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Liip.Events', 'main-menu-item', 'side-menu-events');
    }

    public function listExtendQuery($query)
    {
        $query->byUser()->get();
    }

    public function formExtendQuery($query)
    {
        $query->byUser()->get();
    }
}