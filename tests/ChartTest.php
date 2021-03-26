<?php

namespace Adecks\ChartJs\Tests;

use Adecks\ChartJs\Chart;
use Adecks\ChartJs\Datasets\Dataset;
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
        $this->assertTrue('line' === $stub->getType());
    }

    /** @test **/
    public function it_can_add_a_dataset()
    {
        $stub = $this->getMockForAbstractClass(Chart::class);
        $stub->addDataset(new Dataset('My First Dataset', [1, 2, 3, 4]));
        $this->assertIsArray($stub->getDatasets());
    }

    /** @test **/
    public function it_serializes_successfully()
    {
        $stub = $this->getMockForAbstractClass(Chart::class);
        $this->assertIsString(json_encode($stub));
    }

    /** @test **/
    public function it_can_be_casted_to_a_string()
    {
        $stub = $this->getMockForAbstractClass(Chart::class);
        $message = "{$stub}";
        $this->assertIsString($message);
    }
}
