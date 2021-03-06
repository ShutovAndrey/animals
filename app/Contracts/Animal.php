<?php

namespace App\Contracts;

interface Animal
{
    public function type(): string;
    public function name(): string;
    public function sex(): string; // M/Ж
    public function weight(): float;
}

