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

    /**
     * Get the value of label
     *
     * @return string 
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return void
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return void
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }
}
