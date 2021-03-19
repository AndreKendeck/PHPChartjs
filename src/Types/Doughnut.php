<?php

namespace Adecks\ChartJs\Types;

use Adecks\ChartJs\Chart;
use Adecks\ChartJs\Options;

class Doughnut extends Chart
{
    /**
     * @param array $labels
     * @param Options $options
     */
    public function __construct(array $labels = [], Options $options = null)
    {
        parent::__construct('doughnut', $labels, $options);
    }
}
