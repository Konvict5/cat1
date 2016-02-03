<?php 

/*
      syntax :
      date ( $format , $timestamp = time() )
      Y : A full numeric representation of a year, 4 digits
      m : Numeric representation of a month, with leading zeros
      d : Day of the month, 2 digits with leading zeros
      M : A short textual representation of a month, three letters
    */

$txt = "Current date and time in Bulgaria:";
date_default_timezone_set ("Europe/Sofia");
echo "<h3>" . $txt . "</h3>";
echo "Date and time (12 hour format): " . date("m/d/Y h:i:s A"); 
echo "<br />Date and time (24 hour format): " . date("m/d/Y G:i:s");

?>