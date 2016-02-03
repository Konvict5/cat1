<?php

/*
      syntax :
      date ( $format , $timestamp = time() )
      Y : A full numeric representation of a year, 4 digits
      m : Numeric representation of a month, with leading zeros
      d : Day of the month, 2 digits with leading zeros
      M : A short textual representation of a month, three letters
      y : A short numeric representation of a year, 2 digits
    */

$txt = "Different types of date formats:";
echo "<h3>" . $txt . "</h3>";
$date=date_create("06-Feb-2016");
echo date_format($date,"d /M / Y");
echo "<br>";

$date=date_create("06-Feb-16");
echo date_format($date,"d/m/y");
echo "<br>";

$date=date_create("2016-02-06");
echo date_format($date,"Y-m-d");
?>