<?php

namespace Adecks\ChartJs\Types;

use Adecks\ChartJs\Chart;
use Adecks\ChartJs\Options;

class Bar extends Chart
{
    public function __construct(array $labels = [], Options $options = null)
    {
        parent::__construct('bar', $labels, $options);
    }
}
