<?php

namespace Adecks\ChartJs\Tests;

use Adecks\ChartJs\Datasets\Dataset;
use PHPUnit\Framework\TestCase;

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

    /** @test **/
    public function a_user_can_add_data_to_the_array_of_the_dataset()
    {
        $dataset = new Dataset('MyData', [12, 13, 14]);
        $this->assertFalse(in_array(15, $dataset->getData()));
        $dataset->addData(15);
        $this->assertTrue(in_array(15, $dataset->getData()));
    }

    /** @test **/
    public function it_can_be_casted_to_a_string()
    {
        $dataset = new Dataset('MyData', [1, 2, 3]);
        $result = json_encode($dataset);
        $this->assertIsString($result);
    }
}
