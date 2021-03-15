<?php

namespace Adecks\ChartJs\Datasets;

abstract class Dataset
{
    protected $label = null;

    protected $data = [];

    protected $backgroundColor = 'rgba(0, 0, 0, 0.1)';

    protected $fill = false;

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
