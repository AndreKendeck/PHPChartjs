<?php

namespace Adecks\ChartJs;

use JsonSerializable;

class Options implements JsonSerializable
{
    public function jsonSerialize()
    {
        return (object) [];
    }
}
