<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
    <?php
            for ( $i = 15; $i <= 20; $i++ ) {
                echo "<tr>";
                for ( $k =1; $k <= 15; $k++) {
                    echo "<td>$i,$k </td>";
                }
                echo "</tr>" ;
            }
        ?>

    </table>

    <?php
	$star=4;
	for($a=1; $a<=$star; $a++){
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
?>
</body>
</html>