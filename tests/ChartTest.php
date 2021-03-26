<?php

namespace Adecks\ChartJs\Tests;

use Adecks\ChartJs\Chart;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class ChartTest extends TestCase
{
    /** @test **/
    public function it_is_an_abstract_class()
    {
        $baseChartClass = new ReflectionClass(Chart::class);
        $this->assertTrue($baseChartClass->isAbstract());
    }

    /** @test **/
    public function it_has_attributes_for_chart()
    {
        $attributes = [
            'type',
            'datasets',
            'options',
            'labels',
        ];
        foreach ($attributes as $attribute) {
            $this->assertClassHasAttribute($attribute, Chart::class);
        }
    }

    /** @test **/
    public function it_returns_an_array_when_getLabels_is_called()
    {
        /** @var Chart $stub **/
        $stub = $this->getMockForAbstractClass(Chart::class);
        $this->assertTrue(is_array($stub->getLabels()));
    }

    /** @test **/
    public function it_returns_a_null_when_getType_is_called_without_a_type_defined()
    {
        /** @var Chart $stub */
        $stub = $this->getMockForAbstractClass(Chart::class);
        $this->assertNull($stub->getType());
    }

    /** @test **/
    public function it_returns_a_string_when_getType_is_called()
    {
        /** @var Chart $stub */
        $stub = $this->getMockForAbstractClass(Chart::class);
        $stub->setType('line');
        $this->assertIsString($stub->getType());
    }

}
