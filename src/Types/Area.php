<?php

namespace Adecks\ChartJs\Types;

use Adecks\ChartJs\Chart;
use Adecks\ChartJs\Options;

class Area extends Chart
{
    /**
     * @param array $labels
     */
    public function __construct(array $labels = [], Options $options = null)
    {
        parent::__construct('area', $labels, $options);
    }
}

