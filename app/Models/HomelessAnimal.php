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

    public function type(): string
    {
        return $this->type;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function sex(): string
    {
        return $this->sex;
    }

    public function weight(): float
    {
        return $this->weight;
    }
}

