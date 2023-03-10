<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        "event_id",
        "guest1_id",
        "guest2_id",
        "monitor1_id",
        "monitor2_id",
        "type",
        "name",
        "date"
    ];
 
}
