<?php

namespace Adecks\ChartJs\Datasets;

use Adecks\ChartJs\Options;

abstract class Dataset
{
    use Options;

    /** @var string */
    protected $label = null;

    /** @var array */
    protected $data = [];

    /**
     * @param string $label
     * @param array $data
     */
    public function __construct(string $label, array $data = [])
    {
        $this->label = $label;
        $this->data = $data;
    }
}
