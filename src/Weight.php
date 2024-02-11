<?php

namespace Nabinem\PhpPackage;

class Weight
{
    public static function kilograms(float $kilograms): self
    {
        return new self($kilograms);
    }

    public function __construct(protected float $kilograms)
    {

    }

    public function toPounds(): float
    {
        return $this->kilograms * 2.2046;
    }
}