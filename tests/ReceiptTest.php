<?php

namespace TDD\Test;

require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use PHPUnit\Framework\TestCase;
use TDD\Receipt;

class ReceiptTest extends TestCase
{
    public function setUp()
    {
        $this->Receipt = new Receipt;
    }

    public function tearDown()
    {
        unset($this->Receipt);
    }

    /** @test */
    public function testTotal()
    {
        # -- input
        $input = [0,2,5,8];
        $coupon = null;

        # -- output
        $output = $this->Receipt->total($input, $coupon);

        # -- expected output
        $expected_output = 15;

        # -- run test
        $this->assertEquals(
            $expected_output,
            $output,
            "When summing the total should equal $expected_output"
        );
    }

    /** @test */
    public function testTotalAndCoupon()
    {
        # -- input
        $input = [0,2,5,8];
        $coupon = 0.20;

        # -- output
        $output = $this->Receipt->total($input, $coupon);

        # -- expected output
        $expected_output = 12;

        # -- run test
        $this->assertEquals(
            $expected_output,
            $output,
            "When summing the total should equal $expected_output"
        );
    }

    /** @test */
    public function testPostTaxTotal()
    {
        $Receipt = $this->getMockBuilder('TDD\Receipt')
            ->setMethods(['tax','total'])
            ->getMock();

        $Receipt->method('total')
            ->will($this->returnValue(10.00));

        $Receipt->method('tax')
            ->will($this->returnValue(1.00));

        $result = $Receipt->postTaxTotal([1,2,5,8], 0.20, null);

        $this->assertEquals(11.0, $result);
    }

    /** @test */
    public function testTax()
    {
        # -- input
        $inputAmount = 10.00;

        # -- tax input
        $taxInput = 0.10;

        # -- output
        $output = $this->Receipt->tax($inputAmount, $taxInput);

        # -- expected output
        $expected_output = 1.00;

        # -- run test
        $this->assertEquals(
            $expected_output,
            $output,
            "The tax calculation should equal $expected_output"
        );
    }
}
