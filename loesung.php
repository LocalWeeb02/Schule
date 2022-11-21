<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lösungen</title>
</head>
<body>
    <?php
    	$zahl1=$_POST['zahl1'];
        $zahl2=$_POST['zahl2'];
        $plus=$zahl1 + $zahl2;
        $plus=number_format($plus ,0,"","");
        $minus=$zahl1 - $zahl2;
        $minus=number_format($minus ,2,",","");
        $mal=$zahl1 * $zahl2;
        $mal=number_format($mal ,2,",","");

        echo "Ihre beiden Zahlen waren $zahl1 und $zahl2<br> <br>" ;
        echo "<br>";
        echo "Würde man die beiden Zahlen addieren wäre das Ergebnis: " ;
        echo "$plus <br>";
        echo "<br>";
        echo "Würde man die die zweite Zahl von der ersten subtrahieren wäre das Ergebnis: " ;
        echo "$minus <br>";
        echo "<br>";
        echo "Würde man die beiden Zahlen multiplizieren wäre das Ergebnis: " ;
        echo "$mal <br>";
        echo "<br>";
        echo "Würde man die beiden Zahlen dividieren wäre das Ergebnis: " ;
        if ($zahl2 == "0") {
            echo "Das geht net";
        } else $geteilt=$zahl1 / $zahl2;

        if ($zahl2 == "0") {
            echo "";
        } else echo "$geteilt <br> <br> <br> <br>";




        if ($plus == "69") {
            echo "Nice";
        }
        

    ?>
</body>
</html>