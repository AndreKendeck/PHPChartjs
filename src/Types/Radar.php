<?php

namespace Adecks\ChartJs\Types;

use Adecks\ChartJs\Chart;

class Radar extends Chart
{
    /**
     * @param array $labels
     * @param array $options
     */
    public function __construct(array $labels = [], array $options = [])
    {
        parent::__construct('radar', $labels, $options);
    }
}
