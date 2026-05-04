<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiRecord extends Model
{
    protected $fillable = [
        'external_id',
        'type',
        'setup',
        'punchline',
    ];
}
