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

    /** @test **/
    public function it_can_set_and_get_setCubicInterpolationMode()
    {
        $dataset = new Dataset('MyData', [1, 2, 3]);
        $dataset->setCubicInterpolationMode('Test');
        $this->assertTrue($dataset->getCubicInterpolationMode() === 'Test');
    }

    /** @test **/
    public function it_can_set_and_get_the_clip()
    {
        $dataset = new Dataset('', []);
        $dataset->setClip('Test');
        $this->assertTrue($dataset->getClip() === 'Test');
    }

    /** @test **/
    public function it_can_set_and_get_the_fill()
    {
        $dataset = new Dataset('', []);
        $dataset->setFill('Test');
        $this->assertTrue($dataset->getFill() === 'Test');
    }

    /** @test **/
    public function it_can_set_and_get_the_hover_background_color()
    {
        $dataset = new Dataset('', []);
        $dataset->setHoverBackgroundColor('Test');
        $this->assertTrue($dataset->getHoverBackgroundColor() === 'Test');
    }

    /** @test **/
    public function test_it_set_and_get_the_hover_border_cap_style()
    {
        $dataset = new Dataset('', []);
        $dataset->setHoverBorderCapStyle('Test');
        $this->assertTrue($dataset->getHoverBorderCapStyle() === 'Test');
    }

    /** @test **/
    public function it_can_set_and_get_the_hover_border_color()
    {
        $dataset = new Dataset('', []);
        $dataset->setHoverBorderColor('Test');
        $this->assertTrue($dataset->getHoverBorderColor() === 'Test');
    }

    /** @test **/
    public function it_can_set_and_get_the_hover_border_dash()
    {
        $dataset = new Dataset('', []);
        $dataset->setHoverBorderDash([1, 2, 3]);
        $this->assertTrue($dataset->getHoverBorderDash() === [1, 2, 3]);
    }

    /** @test **/
    public function it_can_set_and_get_the_border_width()
    {
        $dataset = new Dataset('', []);
        $dataset->setBorderWidth(10);
        $this->assertTrue($dataset->getBorderWidth() === 10);
    }

    /** @test **/
    public function it_can_set_and_get_the_border_join_style()
    {
        $dataset = new Dataset('', []);
        $dataset->setBorderJoinStyle('Test');
        $this->assertTrue($dataset->getBorderJoinStyle() === 'Test');
    }

    /** @test **/
    public function it_can_set_and_get_the_border_cap_style()
    {
        $dataset = new Dataset('', []);
        $dataset->setBorderCapStyle('Test');
        $this->assertTrue($dataset->getBorderCapStyle() === 'Test');
    }

    /** @test **/
    public function it_can_set_and_get_the_border_color()
    {
        $dataset = new Dataset('', []);
        $dataset->setBorderColor('Test');
        $this->assertTrue($dataset->getBorderColor() === 'Test');
    }

    /** @test **/
    public function it_can_set_and_get_the_border_dash()
    {
        $dataset = new Dataset('', []);
        $dataset->setBorderDash([1, 2, 3]);
        $this->assertTrue($dataset->getBorderDash() === [1, 2, 3]);
    }

    /** @test **/
    public function it_can_set_and_get_the_hover_border_dash_offset()
    {
        $dataset = new Dataset('', []);
        $dataset->setBorderDashOffset(4.5);
        $this->assertTrue($dataset->getBorderDashOffset() === 4.5);
    }

    /** @test **/
    public function it_can_set_and_get_the_line_tension()
    {
        $dataset = new Dataset('', []);
        $dataset->setLineTension(4.5);
        $this->assertTrue($dataset->getLineTension() === 4.5);
    }

    /** @test **/
    public function it_can_set_and_get_the_order()
    {
        $dataset = new Dataset('', []);
        $dataset->setOrder(8);
        $this->assertTrue($dataset->getOrder() === 8);
    }

    /** @test **/
    public function it_can_set_and_get_the_point_background_color()
    {
        $dataset = new Dataset('', []);
        $dataset->setPointBackgroundColor('Test');
        $this->assertTrue($dataset->getPointBackgroundColor() === 'Test');
    }

    /** @test **/
    public function it_can_set_and_get_the_point_border_color()
    {
        $dataset = new Dataset('', []);
        $dataset->setPointBorderColor('Test');
        $this->assertTrue($dataset->getPointBorderColor() === 'Test');
    }

    /** @test **/
    public function it_can_set_and_get_the_point_border_width()
    {
        $dataset = new Dataset('', []);
        $dataset->setPointBorderWidth(10);
        $this->assertTrue($dataset->getPointBorderWidth() === 10);
    }

    /** @test **/
    public function it_can_set_and_get_the_point_hit_radius()
    {
        $dataset = new Dataset('', []);
        $dataset->setPointHitRadius(5);
        $this->assertTrue($dataset->getPointHitRadius() === 5);
    }

    /** @test **/
    public function it_can_set_and_get_the_point_hover_background_color()
    {
        $dataset = new Dataset('', []);
        $dataset->setPointHoverBackgroundColor('Test');
        $this->assertTrue($dataset->getPointHoverBackgroundColor() === 'Test');
    }

    /** @test **/
    public function it_can_set_and_get_the_point_hover_border_color()
    {
        $dataset = new Dataset('', []);
        $dataset->setPointHoverBorderColor('Test');
        $this->assertTrue($dataset->getPointHoverBorderColor('Test') === 'Test');
    }

    /** @test **/
    public function it_can_set_and_get_thePoint_hover_border_width()
    {
        $dataset = new Dataset('', []);
        $dataset->setPointHoverBorderWidth(3);
        $this->assertTrue($dataset->getPointHoverBorderWidth() === 3);
    }

    /** @test **/
    public function it_can_set_and_get_the_point_hover_radius()
    {
        $dataset = new Dataset('', []);
        $dataset->setPointHoverRadius(3);
        $this->assertTrue($dataset->getPointHoverRadius() === 3);
    }

    /** @test **/
    public function it_can_set_and_get_the_point_radius()
    {
        $dataset = new Dataset('', []);
        $dataset->setPointRadius(2);
        $this->assertTrue($dataset->getPointRadius() === 2);
    }

    /** @test **/
    public function it_can_set_and_get_the_point_rotation()
    {
        $dataset = new Dataset('', []);
        $dataset->setPointRotation(1);
        $this->assertTrue($dataset->getPointRotation() === 1);
    }

    /** @test **/
    public function it_can_set_and_get_the_point_style()
    {
        $dataset = new Dataset('', []);
        $dataset->setPointStyle('Test');
        $this->assertTrue($dataset->getPointStyle() === 'Test');
    }

    /** @test **/
    public function it_can_set_and_get_the_show_line()
    {
        $dataset = new Dataset('', []);
        $dataset->setShowLine(true);
        $this->assertTrue($dataset->getShowLine());
    }

    /** @test **/
    public function it_can_get_and_set_the_span_gaps()
    {
        $dataset = new Dataset('', []);
        $dataset->setSpanGaps(true);
        $this->assertTrue($dataset->getSpanGaps());
    }

    /** @test **/
    public function it_can_set_and_get_the_stepped_line()
    {
        $dataset = new Dataset('', []);
        $dataset->setSteppedLine(true);
        $this->assertTrue($dataset->getSteppedLine());
    }
}
