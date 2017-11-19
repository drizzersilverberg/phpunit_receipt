<?php

namespace TDD\Test;

require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use PHPUnit\Framework\TestCase;
use TDD\Receipt;

class ReceiptTest extends TestCase
{
    public function setUp()
    {
        $this->Formatter = $this->getMockBuilder('TDD\Formatter')
            ->setMethods(['currencyAmt'])
            ->getMock();

        $this->Formatter->expects($this->any())
            ->method('currencyAmt')
            ->with($this->anything())
            ->will($this->returnArgument(0));

        $this->Receipt = new Receipt($this->Formatter);
    }

    public function tearDown()
    {
        unset($this->Receipt);
    }

    /**
     * @dataProvider provideSubTotal
     */
    public function testSubTotal($items, $expected)
    {
        $coupon = null;

        # -- output
        $output = $this->Receipt->subTotal($items, $coupon);

        # -- run test
        $this->assertEquals(
            $expected,
            $output,
            "When summing the total should equal {$expected}"
        );
    }

    public function provideSubTotal()
    {
        return [
            'inst totaling 16' => [[1,2,5,8], 16],
            [[-1,2,5,8], 14],
            [[1,2,8], 11],
        ];
    }

    /** @test */
    public function testSubTotalAndCoupon()
    {
        # -- input
        $input = [0,2,5,8];
        $coupon = 0.20;

        # -- output
        $output = $this->Receipt->subTotal($input, $coupon);

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
    public function testSubTotalException()
    {
        $input = [0,2,5,8];
        $coupon = 1.20;
        $this->expectException('BadMethodCallException');
        $this->Receipt->subTotal($input, $coupon);
    }

    /** @test */
    public function testPostTaxTotal()
    {
        $items = [1,2,5,8];
        $tax = 0.20;
        $coupon = null;
        $Receipt = $this->getMockBuilder('TDD\Receipt')
            ->setMethods(['tax','subTotal'])
            ->setConstructorArgs([$this->Formatter])
            ->getMock();

        $Receipt->expects($this->once())
            ->method('subTotal')
            ->with($items, $coupon)
            ->will($this->returnValue(10.00));

        $Receipt->expects($this->once())
            ->method('tax')
            ->with(10.00)
            ->will($this->returnValue(1.00));

        $result = $Receipt->postTaxTotal([1,2,5,8], null);

        $this->assertEquals(11.0, $result);
    }

    /** @test */
    public function testTax()
    {
        $inputAmount = 10.00;
        $this->Receipt->tax = 0.10;
        $output = $this->Receipt->tax($inputAmount);
        $expected_output = 1.00;
        $this->assertEquals(
            $expected_output,
            $output,
            "The tax calculation should equal $expected_output"
        );
    }
}
