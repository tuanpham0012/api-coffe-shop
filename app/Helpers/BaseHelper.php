<?php

namespace App\Helpers;

use DateTime;

class BaseHelper
{
    public static function validationDateTime($date, $format = 'Y-m-d')
    {
        $d = DateTime::createFromFormat($format, $date);
    // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
        return $d && $d->format($format) === $date;
    }
}
