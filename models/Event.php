<?php namespace Liip\Events\Models;

use Backend\Facades\BackendAuth;
use Backend\Models\User;
use October\Rain\Database\Model;


/**
 * Model
 */
class Event extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Validation
     */
    public $rules = [
        'title' => 'required',
        'description' => 'required',
        'start' => 'required|date',
        'end' => 'required|date',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'liip_events_events';

    public $belongsToMany = [
        'tags' => [Tag::class, 'table' => 'liip_events_event_tag']
    ];
    public $belongsTo = [
        'user' => [User::class]
    ];

    public function scopePublished($query)
    {
        $query->where('is_published', true);
    }

    public function scopeByUser($query)
    {
        $user = BackendAuth::getUser();
        if(!$user->is_superuser) {
            $query->where('user_id', $user->id);
        }
    }

    public function beforeSave()
    {
        $this->user = BackendAuth::getUser();
    }
}