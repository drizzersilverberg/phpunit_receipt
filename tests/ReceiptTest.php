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

        # -- output
        $output = $this->Receipt->total($input);

        # -- define the sum of $numbers
        $expected_output = 15;

        # -- test receipt->total() function
        $this->assertEquals(
            $expected_output,
            $output,
            "When summing the total should equal $expected_output"
        );
    }
}
