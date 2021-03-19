<?php

namespace Adecks\ChartJs\Datasets;

use JsonSerializable;

class Dataset implements JsonSerializable
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

    public function jsonSerialize()
    {
        return (object) [];
    }

    public function __toString()
    {
        return (string) $this->jsonSerialize();
    }
}
