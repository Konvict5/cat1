 <?php 

    /*
      syntax :
      Trapezoid Area, Trapezoid Diameter
    */

      $txt = "Trapezoid with side a=32sm, side b=12sm and h=15sm has area of 330sm<sup>2</sup> :";

        $h = 15;
        $a= 32; $b=12; $c=16; $d=9;
        echo "<h3>" . $txt . "</h3>";

        //Area of Trapezoid
        $Area= ($a+ $b)/2*$h;
        echo "\nArea of Trapezoid is : ".$Area;
        echo "<br>";
        //Diameter of Trapezoid
        $Diameter= $a + $b + $c + $d;
        echo "\nDiameter of Trapezoid is : ".$Diameter;

        echo "<br>";

        $txt1 = "Trapezoid with side a=15sm, side b=13sm and h=8sm has area of 112sm<sup>2</sup>:";

        $h = 8;
        $a= 15; $b=13; $c=12; $d=6;
        echo "<h3>" . $txt1 . "</h3>";

        //Area of Trapezoid
        $Area= ($a+ $b)/2*$h;
        echo "\nArea of Trapezoid is : ".$Area;
        echo "<br>";
        //Diameter of Trapezoid
        $Diameter= $a + $b + $c + $d;
        echo "\nDiameter of Trapezoid is : ".$Diameter;

        echo "<br>";

        $txt2 = "Trapezoid with side a=42sm, side b=22sm and h=25sm has area of 800sm<sup>2</sup>:";

        $h = 25;
        $a= 42; $b=22; $c=17; $d=19;
        echo "<h3>" . $txt2 . "</h3>";

        //Area of Trapezoid
        $Area= ($a+ $b)/2*$h;
        echo "\nArea of Trapezoid is : ".$Area;
        echo "<br>";
        //Diameter of Trapezoid
        $Diameter= $a + $b + $c + $d;
        echo "\nDiameter of Trapezoid is : ".$Diameter;