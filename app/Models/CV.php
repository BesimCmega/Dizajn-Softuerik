<?php

namespace App\Models;

use App\Models\Documents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cv extends Documents
{
    use HasFactory;
    protected $table = 'cv';
    protected $fillable = [
        'lookingjob',
        'experience',
        'education',
        'phonenumber',
        'document',
        'userid'
    ];

}
