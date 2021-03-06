<?php namespace Liip\Events\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Tags extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'events.tags' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Liip.Events', 'main-menu-item', 'side-menu-tags');
    }
}