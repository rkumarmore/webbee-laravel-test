<?php

namespace App\Models;


use App\Models\Workshop;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    /**
     * Get the events for the workshop
     */
    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }
}
