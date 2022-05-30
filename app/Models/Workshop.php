<?php


namespace App\Models;


use App\Models\Event;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{

    /**
     * Get the events for the workshop
     */
    public function events()
    {
        return $this->belongsTo(Event::class, 'event_id');

    }
}
