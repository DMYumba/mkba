<?php

namespace App\Support;

class Status
{
    public static function label($value)
    {
        switch ($value) {
            case 1:
                return 'Pending';
            case 2:
                return 'In process';
            case 3:
                return 'Inspection';
            case 4:
                return 'Cleared';
            case 5:
                return 'Delivered';
            default:
                return 'Declined';
        }
    }
}
