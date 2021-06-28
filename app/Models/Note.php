<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //
    protected $table = 'notes';

    protected $fillable = [
        'id_user', 'subject', 'content',
    ];
}
