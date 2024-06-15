<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;
    protected $fillable = [
        'cours_id',
        'cours_name',
        'type',
        'price',
        'cours_image',
        'cours_video',
        'cours_about',
        'cours_text',
        'cours_length',
        'cours_days',
        'techer',
        'techer_image',
        'book',
        'test',
        'test_javob',
        'lugat',
    ];
    
}
