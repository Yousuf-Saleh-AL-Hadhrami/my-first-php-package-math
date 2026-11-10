<?php 

namespace YousufAlhadhrami\Math;

class Calender
{
    public function getCurrentDate(): string
    {
        return date('Y-m-d');
    }

    public function getCurrentTime(): string
    {
        return date('H:i:s');
    }

    public function getCurrentDateTime(): string
    {
        return date('Y-m-d H:i:s');
    }
}