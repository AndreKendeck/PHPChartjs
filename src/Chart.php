<?php

namespace Adecks\ChartJs;

use Adecks\ChartJs\Datasets\Dataset;
use JsonSerializable;

abstract class Chart implements JsonSerializable
{
    /**
     * The type of chart.
     * @var string|null
     */
    protected $type = null;

    /**
     * The X-axis labels
     * @var array 
     */
    protected $labels = [];

    /** 
     * The Datasets for the chart
     * @var Dataset[]  
     */
    protected $datasets = [];


    /** @var Options  */
    protected $options = null;

    /**
     * @param string $type
     */
    public function __construct(string $type = null, array $labels = [], Options $options = null)
    {
        $this->type = $type;
        $this->labels = $labels;
        $this->options = $options;
    }

    /**
     * @return array
     */
    public function getLabels(): array
    {
        return $this->labels;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return void
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Add a Dataset to the chart
     * @param Dataset $dataset
     */
    public function addDataset(Dataset $dataset): void
    {
        array_push($this->datasets, $dataset);
    }

    /**
     * Add a X-Axis label to the chart
     * @param string $label
     * @return void
     */
    public function addLabel(string $label): void
    {
        array_push($this->labels, $label);
    }


    /**
     * Add an array of labels to the object
     * @param array $labels
     * @return void
     */
    public function addLabels(array $labels): void
    {
        foreach ($labels as $label) {
            $this->addLabel($label);
        }
    }

    /**
     * @return void
     */
    public function jsonSerialize()
    {
        return (object) [
            'data' => [
                'labels' => $this->labels,
                'datasets' => $this->datasets
            ],
            'options' => $this->options
        ];
    }

    /**
     * Return a json encoded form of the chart
     * @return string
     */
    public function  __toString()
    {
        return json_encode($this->jsonSerialize());
    }
}
