<?php

namespace App\Tests\Service;



use App\Service\NumberFormatter;
use PHPUnit\Framework\TestCase;


class NumberFormatterTest extends TestCase
{
    public function getConverterData()
    {
        return [
            [0, '0'],
            [1, '1.00'],
            [1.1, '1.10'],
            [1.666666, '1.67'],
            [1.006, '1.01'],
            [999.46666, '999.47'],
            [999.49999, '1 000'],
            [999.5, '1 000'],
            [11111.55, '11 112'],
            [99949, '99 949'],
            [99950, '100K'],
            [100000.999991, '100K'],
            [994999, '995K'],
            [995000, '1.00M'],
            [2995000.123456, '3.00M'],
            [123456789.010203, '123.46M'],
            [-1, '-1.00'],
            [-1.1, '-1.10'],
            [-1.666666, '-1.67'],
            [-1.006, '-1.01'],
            [-999.46666, '-999.47'],
            [-999.49999, '-1 000'],
            [-999.5, '-1 000'],
            [-11111.55, '-11 112'],
            [-99949, '-99 949'],
            [-99950, '-100K'],
            [-100000.999991, '-100K'],
            [-994999, '-995K'],
            [-995000, '-1.00M'],
            [-2995000.123456, '-3.00M'],
            [-123456789.010203, '-123.46M'],
        ];
    }
    /**
     * @dataProvider getConverterData
     */
    public function testNumberConverter($input, $expected)
    {
        $converter = new NumberFormatter();
        $result = $converter->numberConverter($input);
        $this->assertEquals($expected, $result);
    }
}