<?php

namespace Adecks\ChartJs\Types;

use Adecks\ChartJs\Chart;

class Bar extends Chart
{
    /**
     * @param array $labels
     * @param Options $options
     */
    public function __construct(array $labels = [], array $options = [])
    {
        parent::__construct('bar', $labels, $options);
    }
}
