<?php

class ContohStatic
{
    public static $angka = 1;

    public static function hallo()
    {
        return "halo " . self::$angka++ . " kali";
    }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::hallo();
echo "<br>";
echo ContohStatic::hallo();
echo "<br>";
echo ContohStatic::hallo();
