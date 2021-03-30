<?php

namespace Adecks\ChartJs\Datasets;

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

    /** @var string|null */
    protected $hoverBackgroundColor = null;

    /** @var string|null */
    protected $hoverBorderCapStyle = null;

    /** @var string|null */
    protected $hoverBorderColor = null;

    /** @var int[]|null */
    protected $hoverBorderDash = null;

    /** @var int|null */
    protected $hoverBorderDashOffset = null;

    /** @var string|null  */
    protected $hoverBorderJoinStyle = null;

    /** @var int|null */
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

    /** @var string|null */
    protected $pointHoverBackgroundColor = null;

    /** @var string|null */
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
     * @param array $hoverBorderDash
     * @return void
     */
    public function setHoverBorderDash(array $hoverBorderDash): void
    {
        $this->hoverBorderDash = $hoverBorderDash;
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

    /**
     * @return float
     */
    public function getBorderDashOffset(): float
    {
        return $this->borderDashOffset;
    }

    /**
     * @param float $borderDashOffset
     * @return void
     */
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


    /**
     * @param string $hoverBorderJoinStyle
     * @return void
     */
    public function setHoverBorderJoinStyle(string $hoverBorderJoinStyle): void
    {
        $this->hoverBorderJoinStyle = $hoverBorderJoinStyle;
    }


    /**
     * @return integer|null
     */
    public function getHoverBorderWidth(): ?int
    {
        return $this->hoverBorderWidth;
    }


    /**
     * @param integer $hoverBorderWidth
     * @return void
     */
    public function setHoverBorderWidth(int $hoverBorderWidth): void
    {
        $this->hoverBorderWidth = $hoverBorderWidth;
    }


    /**
     * @return float
     */
    public function getLineTension(): float
    {
        return $this->lineTension;
    }

    /**
     * @param float $lineTension
     * @return void
     */
    public function setLineTension(float $lineTension): void
    {
        $this->lineTension = $lineTension;
    }

    /**
     * @return integer
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * @param integer $order
     * @return void
     */
    public function setOrder(int $order): void
    {
        $this->order = $order;
    }

    /**
     * @return string
     */
    public function getPointBackgroundColor(): string
    {
        return $this->pointBackgroundColor;
    }

    /**
     * @param string $pointBackgroundColor
     * @return void
     */
    public function setPointBackgroundColor(string $pointBackgroundColor): void
    {
        $this->pointBackgroundColor = $pointBackgroundColor;
    }

    /**
     * @return string
     */
    public function getPointBorderColor(): string
    {
        return $this->pointBorderColor;
    }

    /**
     * @param string $pointBorderColor
     * @return void
     */
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

    /**
     * @param integer $pointBorderWidth
     * @return void
     */
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
     * @param int $pointHitRadius
     * @return void
     */
    public function setPointHitRadius(int $pointHitRadius): void
    {
        $this->pointHitRadius = $pointHitRadius;
    }

    /**
     * @return string|null
     */
    public function getPointHoverBackgroundColor(): ?string
    {
        return $this->pointHoverBackgroundColor;
    }


    /**
     * @param string $pointHoverBackgroundColor
     * @return void
     */
    public function setPointHoverBackgroundColor(string $pointHoverBackgroundColor): void
    {
        $this->pointHoverBackgroundColor = $pointHoverBackgroundColor;
    }

    /**
     * @return string|null
     */
    public function getPointHoverBorderColor(): ?string
    {
        return $this->pointHoverBorderColor;
    }


    /**
     * @param string $pointHoverBorderColor
     * @return void
     */
    public function setPointHoverBorderColor(string $pointHoverBorderColor): void
    {
        $this->pointHoverBorderColor = $pointHoverBorderColor;
    }

    /**
     * @return integer
     */
    public function getPointHoverBorderWidth(): int
    {
        return $this->pointHoverBorderWidth;
    }

    /**
     * @param integer $pointHoverBorderWidth
     * @return void
     */
    public function setPointHoverBorderWidth(int $pointHoverBorderWidth): void
    {
        $this->pointHoverBorderWidth = $pointHoverBorderWidth;
    }

    /**
     * @return integer
     */
    public function getPointHoverRadius(): int
    {
        return $this->pointHoverRadius;
    }

    /**
     * @param int $pointHoverRadius
     * @return void
     */
    public function setPointHoverRadius(int $pointHoverRadius): void
    {
        $this->pointHoverRadius = $pointHoverRadius;
    }

    /**
     * @return integer
     */
    public function getPointRadius(): int
    {
        return $this->pointRadius;
    }

    /**
     * @param integer $pointRadius
     * @return void
     */
    public function setPointRadius(int $pointRadius): void
    {
        $this->pointRadius = $pointRadius;
    }

    /**
     * @return integer
     */
    public function getPointRotation(): int
    {
        return $this->pointRotation;
    }

    /**
     * Set the value of pointRotation
     * @param   mixed  $pointRotation  
     */
    public function setPointRotation($pointRotation): void
    {
        $this->pointRotation = $pointRotation;
    }

    /**
     * @return string
     */
    public function getPointStyle(): string
    {
        return $this->pointStyle;
    }

    /**
     * @param string $pointStyle
     * @return void
     */
    public function setPointStyle(string $pointStyle): void
    {
        $this->pointStyle = $pointStyle;
    }

    /**
     * @return boolean|null
     */
    public function getShowLine(): ?bool
    {
        return $this->showLine;
    }


    /**
     * @param boolean $showLine
     * @return void
     */
    public function setShowLine(bool $showLine): void
    {
        $this->showLine = $showLine;
    }

    /**
     * @return boolean|null
     */
    public function getSpanGaps(): ?bool
    {
        return $this->spanGaps;
    }

    /**
     * @param boolean $spanGaps
     * @return void
     */
    public function setSpanGaps(bool $spanGaps): void
    {
        $this->spanGaps = $spanGaps;
    }

    /**
     * @return  mixed
     */
    public function getSteppedLine()
    {
        return $this->steppedLine;
    }

    /**
     * @param mixed $steppedLine
     * @return void
     */
    public function setSteppedLine($steppedLine): void
    {
        $this->steppedLine = $steppedLine;
    }
}
