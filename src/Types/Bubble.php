<?php

namespace Adecks\ChartJs\Types;

use Adecks\ChartJs\Chart;

class Bubble extends Chart
{
    /**
     * @param array $labels
     * @param Options $options
     */
    public function __construct(array $labels = [], array $options = [])
    {
        parent::__construct('bubble', $labels, $options);
    }
}
