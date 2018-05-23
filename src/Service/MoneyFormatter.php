<?php
/**
 * Created by PhpStorm.
 * User: vikto
 * Date: 2018-05-23
 * Time: 11:16 PM
 */

namespace App\Service;


class MoneyFormatter
{
    /**
     * @var NumberFormatter
     */
    private $numberFormatter;

    public function __construct(NumberFormatter $numberFormatter)
    {
        $this->numberFormatter = $numberFormatter;
    }
    public function formatEur($number)
    {
        $number = $this->numberFormatter->numberConverter($number);
        return $number.' €';
    }
    public function formatUsd($number)
    {
        $number = $this->numberFormatter->numberConverter($number);
        return '$'.$number;
    }


}