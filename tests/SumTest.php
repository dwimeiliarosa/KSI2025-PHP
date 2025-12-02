<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../index.php';

class SumTest extends TestCase
{
    public function testSumFunction()
    {
        $this->assertEquals(5, sum(2, 3));
    }
}
