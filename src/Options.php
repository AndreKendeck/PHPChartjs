<?php

namespace Adecks\ChartJs;

trait Options
{
    /** @var string */
    protected $backgroundColor = 'rgba(0, 0, 0, 0.1)';

    /** @var string  */
    protected $borderCapStyle = 'butt';

    /** @var string */
    protected $borderColor = 'rgba(0, 0, 0, 0.1)';

    /** @var array */
    protected $borderDash = [];

    /** @var float */
    protected $borderDashOffset = 0.0;

    /** @var bool */
    protected $fill = true;

    /** @var string */
    protected $borderJoinStyle = 'mitter';

    /** @var int */
    protected $borderWidth = 3;

    /** @var string */
    protected $cubicInterpolationMode = 'default';

    /** @var string  */
    protected $clip = 'borderWidth / 2';

    /** @var string */
    protected $hoverBackgroundColor = null;

    /** @var string */
    protected $hoverBorderCapStyle = null;

    /** @var string */
    protected $hoverBorderColor = null;

    /** @var int[] */
    protected $hoverBorderDash = null;

    /** @var int */
    protected $hoverBorderDashOffset = null;

    /** @var string  */
    protected $hoverBorderJoinStyle = null;

    /** @var int */
    protected $hoverBorderWidth = null;

    /** @var float */
    protected $lineTension = 0.4;

    /** @var int */
    protected $order = 0;

    /** @var string */
    protected $pointBackgroundColor = 'rgba(0, 0, 0, 0.1)';

    /** @var string */
    protected $pointBorderColor = 'rgba(0, 0, 0, 0.1)';

    /** @var int */
    protected $pointBorderWidth = 1;

    /** @var int */
    protected $pointHitRadius = 1;

    /** @var string */
    protected $pointHoverBackgroundColor = null;

    /** @var string */
    protected $pointHoverBorderColor = null;

    /** @var int */
    protected $pointHoverBorderWidth = 1;

    /** @var int */
    protected $pointHoverRadius = 4;

    /** @var int */
    protected $pointRadius = 3;

    /** @var int */
    protected $pointRotation = 0;

    /** @var string */
    protected $pointStyle = 'circle';

    /** @var bool */
    protected $showLine = null;

    /** @var bool */
    protected $spanGaps = null;

    /** @var string|bool */
    protected $steppedLine = false;


    /**
     * @return string
     */
    public function getCubicInterpolationMode(): string
    {
        return $this->cubicInterpolationMode;
    }

    /**
     * @param string $cubicInterpolationMode
     * @return void
     */
    public function setCubicInterpolationMode(string $cubicInterpolationMode): void
    {
        $this->cubicInterpolationMode = $cubicInterpolationMode;
    }

    /**
     * @return string
     */
    public function getClip(): string
    {
        return $this->clip;
    }

    /**
     * @param mixed $clip
     * @return void
     */
    public function setClip($clip): void
    {
        $this->clip = $clip;
    }

    /**
     * @return mixed
     */
    public function getFill()
    {
        return $this->fill;
    }

    /**
     * @param mixed $fill
     * @return void
     */
    public function setFill($fill): void
    {
        $this->fill = $fill;
    }

    /**
     * @return string|null
     */
    public function getHoverBackgroundColor(): ?string
    {
        return $this->hoverBackgroundColor;
    }

    /**
     * @param string $hoverBackgroundColor
     * @return void
     */
    public function setHoverBackgroundColor(string $hoverBackgroundColor): void
    {
        $this->hoverBackgroundColor = $hoverBackgroundColor;
    }

    /**
     * @return string|null
     */
    public function getHoverBorderCapStyle(): ?string
    {
        return $this->hoverBorderCapStyle;
    }

    /**
     * @param string $hoverBorderCapStyle
     * @return void
     */
    public function setHoverBorderCapStyle(string $hoverBorderCapStyle): void
    {
        $this->hoverBorderCapStyle = $hoverBorderCapStyle;
    }

    /**
     * @return string|null
     */
    public function getHoverBorderColor(): ?string
    {
        return $this->hoverBorderColor;
    }

    /**
     * @param string $hoverBorderColor
     * @return void
     */
    public function setHoverBorderColor(string $hoverBorderColor)
    {
        $this->hoverBorderColor = $hoverBorderColor;
    }

    /**
     * @return array|null
     */
    public function getHoverBorderDash(): ?array
    {
        return $this->hoverBorderDash;
    }

    /**
     * @return integer
     */
    public function getBorderWidth(): int
    {
        return $this->borderWidth;
    }

    /**
     * @param integer $borderWidth
     * @return void
     */
    public function setBorderWidth(int $borderWidth): void
    {
        $this->borderWidth = $borderWidth;
    }

    /**
     * @return string
     */
    public function getBorderJoinStyle(): string
    {
        return $this->borderJoinStyle;
    }

    /**
     * @param string $borderJoinStyle
     * @return void
     */
    public function setBorderJoinStyle(string $borderJoinStyle): void
    {
        $this->borderJoinStyle = $borderJoinStyle;
    }

    /**
     * @return string
     */
    public function getBorderCapStyle(): string
    {
        return $this->borderCapStyle;
    }

    /**
     * @param string $borderCapStyle
     * @return void
     */
    public function setBorderCapStyle(string $borderCapStyle): void
    {
        $this->borderCapStyle = $borderCapStyle;
    }

    /**
     * @return string
     */
    public function getBorderColor(): string
    {
        return $this->borderColor;
    }

    /**
     * @param string $borderColor
     * @return void
     */
    public function setBorderColor(string $borderColor): void
    {
        $this->borderColor = $borderColor;
    }

    /**
     * @return array
     */
    public function getBorderDash(): array
    {
        return $this->borderDash;
    }

    /**
     * @param array $borderDash
     * @return void
     */
    public function setBorderDash(array $borderDash): void
    {
        $this->borderDash = $borderDash;
    }

    public function getBorderDashOffset(): float
    {
        return $this->borderDashOffset;
    }

    public function setBorderDashOffset(float $borderDashOffset): void
    {
        $this->borderDashOffset = $borderDashOffset;
    }


    /**
     * @return string
     */
    public function getBackgroundColor(): string
    {
        return $this->backgroundColor;
    }

    /**
     * @param string $backgroundColor
     * 
     * @return void
     */
    public function setBackgroundColor(string $backgroundColor): void
    {
        $this->backgroundColor = $backgroundColor;
    }

    /**
     * @return int
     */
    public function getHoverBorderDashOffset(): ?int
    {
        return $this->hoverBorderDashOffset;
    }

    /**
     * Set the value of hoverBorderDashOffset
     *
     * @param int $hoverBorderDashOffset  
     */
    public function setHoverBorderDashOffset(int $hoverBorderDashOffset): void
    {
        $this->hoverBorderDashOffset = $hoverBorderDashOffset;
    }

    /**
     * Get the value of hoverBorderJoinStyle
     *
     * @return string
     */
    public function getHoverBorderJoinStyle(): ?string
    {
        return $this->hoverBorderJoinStyle;
    }


    public function setHoverBorderJoinStyle(string $hoverBorderJoinStyle): void
    {
        $this->hoverBorderJoinStyle = $hoverBorderJoinStyle;
    }


    public function getHoverBorderWidth(): ?int
    {
        return $this->hoverBorderWidth;
    }


    public function setHoverBorderWidth(int $hoverBorderWidth): void
    {
        $this->hoverBorderWidth = $hoverBorderWidth;
    }


    public function getLineTension(): float
    {
        return $this->lineTension;
    }

    public function setLineTension(float $lineTension): void
    {
        $this->lineTension = $lineTension;
    }

    public function getOrder(): int
    {
        return $this->order;
    }


    public function setOrder(int $order): void
    {
        $this->order = $order;
    }


    public function getPointBackgroundColor(): string
    {
        return $this->pointBackgroundColor;
    }


    public function setPointBackgroundColor(string $pointBackgroundColor): void
    {
        $this->pointBackgroundColor = $pointBackgroundColor;
    }


    public function getPointBorderColor(): string
    {
        return $this->pointBorderColor;
    }


    public function setPointBorderColor(string $pointBorderColor): void
    {
        $this->pointBorderColor = $pointBorderColor;
    }

    /**
     * @return int
     */
    public function getPointBorderWidth(): int
    {
        return $this->pointBorderWidth;
    }


    public function setPointBorderWidth(int $pointBorderWidth): void
    {
        $this->pointBorderWidth = $pointBorderWidth;
    }

    /**
     * @return integer
     */
    public function getPointHitRadius(): int
    {
        return $this->pointHitRadius;
    }

    /**
     * Set the value of pointHitRadius
     *
     * @param   mixed  $pointHitRadius  
     *
     * @return  self
     */
    public function setPointHitRadius($pointHitRadius)
    {
        $this->pointHitRadius = $pointHitRadius;

        return $this;
    }

    /**
     * Get the value of pointHoverBackgroundColor
     *
     * @return  mixed
     */
    public function getPointHoverBackgroundColor()
    {
        return $this->pointHoverBackgroundColor;
    }

    /**
     * Set the value of pointHoverBackgroundColor
     *
     * @param   mixed  $pointHoverBackgroundColor  
     *
     * @return  self
     */
    public function setPointHoverBackgroundColor($pointHoverBackgroundColor)
    {
        $this->pointHoverBackgroundColor = $pointHoverBackgroundColor;

        return $this;
    }

    /**
     * Get the value of pointHoverBorderColor
     *
     * @return  mixed
     */
    public function getPointHoverBorderColor()
    {
        return $this->pointHoverBorderColor;
    }

    /**
     * Set the value of pointHoverBorderColor
     *
     * @param   mixed  $pointHoverBorderColor  
     *
     * @return  self
     */
    public function setPointHoverBorderColor($pointHoverBorderColor)
    {
        $this->pointHoverBorderColor = $pointHoverBorderColor;

        return $this;
    }

    /**
     * Get the value of pointHoverBorderWidth
     *
     * @return  mixed
     */
    public function getPointHoverBorderWidth()
    {
        return $this->pointHoverBorderWidth;
    }

    /**
     * Set the value of pointHoverBorderWidth
     *
     * @param   mixed  $pointHoverBorderWidth  
     *
     * @return  self
     */
    public function setPointHoverBorderWidth($pointHoverBorderWidth)
    {
        $this->pointHoverBorderWidth = $pointHoverBorderWidth;

        return $this;
    }

    /**
     * Get the value of pointHoverRadius
     *
     * @return  mixed
     */
    public function getPointHoverRadius()
    {
        return $this->pointHoverRadius;
    }

    /**
     * Set the value of pointHoverRadius
     *
     * @param   mixed  $pointHoverRadius  
     *
     * @return  self
     */
    public function setPointHoverRadius($pointHoverRadius)
    {
        $this->pointHoverRadius = $pointHoverRadius;

        return $this;
    }

    /**
     * Get the value of pointRadius
     *
     * @return  mixed
     */
    public function getPointRadius()
    {
        return $this->pointRadius;
    }

    /**
     * Set the value of pointRadius
     *
     * @param   mixed  $pointRadius  
     *
     * @return  self
     */
    public function setPointRadius($pointRadius)
    {
        $this->pointRadius = $pointRadius;

        return $this;
    }

    /**
     * Get the value of pointRotation
     *
     * @return  mixed
     */
    public function getPointRotation()
    {
        return $this->pointRotation;
    }

    /**
     * Set the value of pointRotation
     *
     * @param   mixed  $pointRotation  
     *
     * @return  self
     */
    public function setPointRotation($pointRotation)
    {
        $this->pointRotation = $pointRotation;

        return $this;
    }

    /**
     * Get the value of pointStyle
     *
     * @return  mixed
     */
    public function getPointStyle()
    {
        return $this->pointStyle;
    }

    /**
     * Set the value of pointStyle
     *
     * @param   mixed  $pointStyle  
     *
     * @return  self
     */
    public function setPointStyle($pointStyle)
    {
        $this->pointStyle = $pointStyle;

        return $this;
    }

    /**
     * Get the value of showLine
     *
     * @return  mixed
     */
    public function getShowLine()
    {
        return $this->showLine;
    }

    /**
     * Set the value of showLine
     *
     * @param   mixed  $showLine  
     *
     * @return  self
     */
    public function setShowLine($showLine)
    {
        $this->showLine = $showLine;

        return $this;
    }

    /**
     * Get the value of spanGaps
     *
     * @return  mixed
     */
    public function getSpanGaps()
    {
        return $this->spanGaps;
    }

    /**
     * Set the value of spanGaps
     *
     * @param   mixed  $spanGaps  
     *
     * @return  self
     */
    public function setSpanGaps($spanGaps)
    {
        $this->spanGaps = $spanGaps;

        return $this;
    }

    /**
     * Get the value of steppedLine
     *
     * @return  mixed
     */
    public function getSteppedLine()
    {
        return $this->steppedLine;
    }

    /**
     * Set the value of steppedLine
     *
     * @param   mixed  $steppedLine  
     *
     * @return  self
     */
    public function setSteppedLine($steppedLine)
    {
        $this->steppedLine = $steppedLine;

        return $this;
    }
}
