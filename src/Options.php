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

    /** @var  */
    protected $hoverBackgroundColor = null;

    /**
     * @return string
     */
    public function getBackgroundColor(): string
    {
        return $this->backgroundColor;
    }

    /**
     * @param string $backgroundColor
     * @return void
     */
    public function setBackgroundColor(string $backgroundColor): void
    {
        $this->backgroundColor = $backgroundColor;
    }
}
