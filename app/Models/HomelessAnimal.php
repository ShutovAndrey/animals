<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomelessAnimal extends AbstractAnimal
{
    use HasFactory;

    protected $table = 'animals';

    protected $fillable = [
        'name',
        'type',
        'sex',
        'weight',
    ];

}

