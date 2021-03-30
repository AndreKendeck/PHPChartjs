<?php

namespace Adecks\ChartJs\Types;

use Adecks\ChartJs\Chart;

class Pie extends Chart
{
    /**
     * @param array $labels
     * @param array $options
     */
    public function __construct(array $labels = [], array $options = [])
    {
        parent::__construct('pie', $labels, $options);
    }
}
