<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
    <?php
        
        require 'skaiciavimas.php';
        
        $skaiciavimas = New Skaiciavimas (array(35,37,43));
        
//        $amzius = array("Jonas"=>"35", "Ona"=>"37", "Toma"=>"43");
    print_r($skaiciavimas->getAmzius());
    echo "<br>";
    $skaiciavimas->toBinary(1);
    echo "<br>";
    $skaiciavimas->toOctal(1);
    echo "<br>";
    $skaiciavimas->toHex(2);
    ?>
    </body>
</html>
