<?php

/*
      syntax :
      date ( $format , $timestamp = time() )
      H: 24-hour format of an hour with leading zeros
      i: Minutes with leading zeros
      g: 12-hour format of an hour without leading zeros
      a: Lowercase Ante meridiem and Post meridiem
      s: Seconds, with leading zeros
    */

$txt = "Different types of time formats:";
echo "<h3>" . $txt . "</h3>";
$date = '22:25';
echo date ('H: i' , strtotime ($date));

echo "<br>";

$date = '10:25pm';
echo date ('g: i a' , strtotime ($date));

echo "<br>";

$date = '22:25:12';
echo date ('H: i : s', strtotime ($date));
