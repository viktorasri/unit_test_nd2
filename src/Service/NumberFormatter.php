<?php
/**
 * Created by PhpStorm.
 * User: vikto
 * Date: 2018-05-23
 * Time: 09:15 PM
 */

namespace App\Service;


class NumberFormatter
{
    public function numberConverter($number)
    {

        if (abs($number) > 0 && abs($number) < 999.5) {
            $number = round($number, 2);
        }

        if (abs($number) >= 999.5 && abs($number) < 99950) {
            $number = number_format((float)$number, 0, '.', ' ');
        }
        if (abs($number) >= 99950 && abs($number) < 995000 ) {
            $number = round($number / 1000) . 'K';
        }
        if (abs($number) >= 995000) {
            $number = number_format((float)$number / 1000000, 2, '.', '') . 'M';
        }
        return $number;


    }

}