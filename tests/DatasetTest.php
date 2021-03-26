<?php

namespace Adecks\ChartJs\Tests;

use Adecks\ChartJs\Datasets\Dataset;
use PHPUnit\Framework\TestCase;
use ReflectionProperty;

/** @covers Dataset */
class DatasetTest extends TestCase
{
    /** @test **/
    public function get_label_returns_a_string()
    {
        $dataset = new Dataset('MyData');
        $this->assertIsString($dataset->getLabel());
        $this->assertTrue($dataset->getLabel() === 'MyData');
    }

    /** @test **/
    public function get_data_returns_an_array()
    {
        $dataset = new Dataset('MyData');
        $this->assertIsArray($dataset->getData());
    }

    /** @test **/
    public function get_data_returns_the_contents_of_the_array()
    {
        $data = [rand(1, 10), rand(1, 10), rand(1, 10)];
        $dataset = new Dataset('MyData', $data);
        $this->assertTrue($dataset->getData() === $data);
    }

    /** @test **/
    public function it_sets_the_label_successfully()
    {
        $string = 'ABDC';
        $dataset = new Dataset('MyData');
        $dataset->setLabel($string);
        $this->assertTrue($dataset->getLabel() === $string);
    }
}
