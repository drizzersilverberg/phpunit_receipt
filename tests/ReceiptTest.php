<?php 

namespace TDD\Test;

require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use PHPUnit\Framework\TestCase;
use TDD\Receipt;

class ReceiptTest extends TestCase 
{
    /** @test */
    public function testTotal()
    {
        $receipt = new Receipt();

        # -- given array of number
        $numbers = [0,2,5,8];

        # -- define the sum of $numbers
        $sum_of_numbers = 15;

        # -- test receipt->total() function
        $this->assertEquals(
            $sum_of_numbers,
            $receipt->total($numbers),
            "When summing the total should equal $sum_of_numbers"
        );
    }
}