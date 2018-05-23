<?php

namespace App\Tests\Service;


use App\Service\MoneyFormatter;
use App\Service\NumberFormatter;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;


class MoneyFormatterTest extends TestCase
{
    public function testEur()
    {
        /** @var NumberFormatter|MockObject $numberFormatterMock */

        $numberFormatterMock = $this->createMock(NumberFormatter::class);
        $numberFormatterMock->expects($this->once())
            ->method('numberConverter')
            ->willReturn('999K');

        $moneyFormatter = new MoneyFormatter($numberFormatterMock);
        $result = $moneyFormatter->formatEur(0);
        $this->assertEquals('999K €', $result);
    }

    public function testUsd()
    {
        /** @var NumberFormatter|MockObject $numberFormatterMock */

        $numberFormatterMock = $this->createMock(NumberFormatter::class);
        $numberFormatterMock->expects($this->once())
            ->method('numberConverter')
            ->willReturn('55.10');

        $moneyFormatter = new MoneyFormatter($numberFormatterMock);
        $result = $moneyFormatter->formatUSD(0);
        $this->assertEquals('$55.10', $result);
    }
}