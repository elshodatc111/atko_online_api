<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mavzu extends Model
{
    use HasFactory;
    protected $fillable = [
        'cours_id',
        'mavzu_id',
        'mavzu_name',
        'mavzu_video',
        'mavzu_text',
        'mavzu_length',
        'mavzu_number',
    ];
}
