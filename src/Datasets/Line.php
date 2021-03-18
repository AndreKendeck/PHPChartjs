<?php

use Adecks\ChartJs\Datasets\Dataset;

class Line extends Dataset implements JsonSerializable
{
    public function jsonSerialize()
    {
        return (object) [];
    }
}
