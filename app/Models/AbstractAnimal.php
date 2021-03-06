<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Contracts\Animal;

abstract class AbstractAnimal extends Model implements Animal
{
    private $male_names = ['Фокс', 'Джек', 'Тaйсон', 'Альфа', 'Татошка', 'Риччи'];
    private $female_names = ['Иди жрать', 'Нюша', 'Ася', 'Ешка'];

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

    public function __toString(): string
    {
        return "{$this->type()} {$this->name()} имеет пол {$this->sex()} и весит {$this->weight()}кг.";
    }

    public function getRandomName($gender)
    {
        if ($gender = 'Мужской') {
            return $this->male_names[rand(0, count($this->male_names) - 1)];
        } else {
            return $this->female_names[rand(0, count($this->female_names) - 1)];
        }
    }
}

