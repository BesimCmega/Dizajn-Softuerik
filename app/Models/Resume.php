<?php

namespace App\Models;

use App\Models\Documents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resume extends Documents
{
    use HasFactory;

    protected $table = 'resume';
    protected $fillable = [
        'company',
        'education',
        'skills',
        'workExperience',
        'phoneNumber',
        'document',
        'userid'
    ];
}
