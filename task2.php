    <?php 

    /*
      syntax :
      Circle Area,  Circle Diameter
      Trapezoid Area, Trapezoid Diameter
    */

    $txt = "Cricle with diameter 6sm  has area of  28.26sm<sup>2</sup>:";
        $p=3.14;
        $r=3;
        $d=6;
        $theta=30;
        echo "<h3>" . $txt . "</h3>";
        //Area of Circle
        $Area= $p*pow($r,2); 
        echo "\nArea of Circle is : ".$Area;
        echo "<br>";
        //Diameter of Circle
        $Diameter= 2*$r;
        echo "\nDiameter of Circle is : ".$Diameter;
        echo "<br>";
        //Circumference of Circle
        $Circumference=$p*$d;
        echo "\nCircumference of Circle is : ".$Circumference;
        echo "<br>";
        //Area of Sector
        $Area_Sector= $p*pow($r,2)*(float)$theta/360;
        echo "\nArea of Sector is : ".$Area_Sector;

       echo "<br>";
       $txt1= "Cricle with diameter 9sm  has area of  101.25sm<sup>2</sup>:";

        $p=5;
        $r=4.50;
        $d=10;
        $theta=35;
        echo "<h3>" . $txt1 . "</h3>";
        //Area of Circle
        $Area= $p*pow($r,2); 
        echo "\nArea of Circle is : ".$Area;
        echo "<br>";
        //Diameter of Circle
        $Diameter= 2*$r;
        echo "\nDiameter of Circle is : ".$Diameter;
        echo "<br>";
        //Circumference of Circle
        $Circumference=$p*$d;
        echo "\nCircumference of Circle is : ".$Circumference;
        echo "<br>";
        //Area of Sector
        $Area_Sector= $p*pow($r,2)*(float)$theta/360;
        echo "\nArea of Sector is : ".$Area_Sector;

        echo "<br>";
        $txt2 = "Cricle with diameter 4sm  has area of  8.64sm<sup>2</sup>:";

        $p=2.16;
        $r=2;
        $d=6;
        $theta=25;
        echo "<h3>" . $txt2 . "</h3>";
        //Area of Circle
        $Area= $p*pow($r,2); 
        echo "\nArea of Circle is : ".$Area;
        echo "<br>";
        //Diameter of Circle
        $Diameter= 2*$r;
        echo "\nDiameter of Circle is : ".$Diameter;
        echo "<br>";
        //Circumference of Circle
        $Circumference=$p*$d;
        echo "\nCircumference of Circle is : ".$Circumference;
        echo "<br>";
        //Area of Sector
        $Area_Sector= $p*pow($r,2)*(float)$theta/360;
        echo "\nArea of Sector is : ".$Area_Sector;

        ?>


 