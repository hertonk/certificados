<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipantSubEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'participant_id',
        'subevent_id'
    ];
}
