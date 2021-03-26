<?php

namespace Adecks\ChartJs;

use JsonSerializable;

class Options implements JsonSerializable
{
    /**
     * If false, the lines between points are not drawn.
     * @var boolean
     */
    protected $showLines = true;

    /**
     * If false, NaN data causes a break in the line.
     * @var boolean
     */
    protected $spanGaps = false;

    protected $displayLegend;

    public function jsonSerialize()
    {
        return (object) [
            'scales' => [
                'xAxes' 
            ]
        ];
    }
}
