<?php

namespace Hjmsw\SendGridEventApi\Models;

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Event extends Eloquent
{
    protected $table = 'events';

    public function scopeOfType($query, $type) {
        return $query->where('event', $type);
    }

    public function scopeAllTypes($query) {
        return $query->whereNotNull('event');
    }

    public function scopeEmail($query, $email) {
        return $query->where('email', $email);
    }
}
