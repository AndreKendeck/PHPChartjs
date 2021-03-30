<?php

namespace Adecks\ChartJs\Types;

use Adecks\ChartJs\Chart;

class Scatter extends Chart
{
    /**
     * @param array $labels
     * @param array $options
     */
    public function __construct(array $labels = [], array $options = [])
    {
        parent::__construct('scatter', $labels, $options);
    }
}
