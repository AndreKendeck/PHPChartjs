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

    /**
     * @param mixed $data
     * @return void
     */
    public function addData($data): void
    {
        array_push($this->data, $data);
    }

    public function jsonSerialize()
    {
        $data = [
            'label' => $this->label,
            'data' => $this->data,
            'backgroundColor' => $this->backgroundColor,
            'borderColor' => $this->borderColor,
            'borderWidth' => $this->borderWidth,
            'borderDash' => $this->borderDash,
            'borderDashOffset' => $this->borderDashOffset,
            'borderJoinStyle' => $this->borderJoinStyle,
            'cubicInterpolation' => $this->cubicInterpolationMode,
            'clip' => $this->clip,
            'fill' => $this->fill,
            'lineTension' => $this->lineTension,
            'order' => $this->order,
            'pointBackgroundColor' => $this->pointBackgroundColor,
            'pointBorderColor' => $this->pointBorderColor,
            'pointBorderWidth' => $this->pointBorderWidth,
            'pointHitRadius' => $this->pointHitRadius,
            'pointHoverBorderWidth' => $this->pointHoverBorderWidth,
            'pointHoverRadius' => $this->pointHoverRadius,
            'pointRadius' => $this->pointRadius,
            'pointRotation' => $this->pointRotation,
            'pointStyle' => $this->pointStyle,
        ];

        if ($this->showLine) {
            $data['showLine'] = $this->showLine;
        }

        if ($this->spanGaps) {
            $data['spanGaps'] = $this->spanGaps;
        }

        if ($this->hoverBackgroundColor) {
            $data['hoverBackgroundColor'] = $this->hoverBackgroundColor;
        }

        if ($this->hoverBorderCapStyle) {
            $data['hoverBorderCapStyle'] = $this->hoverBorderCapStyle;
        }

        if ($this->hoverBorderColor) {
            $data['hoverBorderColor'] = $this->hoverBorderColor;
        }

        if ($this->hoverBorderDash) {
            $data['hoverBorderDash'] = $this->hoverBorderDash;
        }

        if ($this->hoverBorderDashOffset) {
            $data['hoverBorderDashOffset'] = $this->hoverBorderDashOffset;
        }

        if ($this->hoverBorderJoinStyle) {
            $data['hoverBorderJoinStyle'] = $this->hoverBorderJoinStyle;
        }

        if ($this->hoverBorderWidth) {
            $data['hoverBorderWidth'] = $this->hoverBorderWidth;
        }

        if ($this->pointHoverBackgroundColor) {
            $data['pointHoverBackgroundColor'] = $this->pointHoverBackgroundColor;
        }

        if ($this->pointHoverBorderColor) {
            $data['pointHoverBorderColor'] = $this->pointHoverBorderColor;
        }

        return (object) $data;
    }

    public function __toString()
    {
        return (string) $this->jsonSerialize();
    }
}
