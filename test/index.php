<?php
// isset = variable définie et differente de nul 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<form method="post">  <!-- method post pour intéragir de facon sécuriser avec le formulaire-->

Opération :     <input type="number" name='nb1'> + 
                <input type="number" name='nb2'>
                <input type="submit" name="addition" value="Addition">
</form>
<br>
<br>
<?php

            $nb1 = (float) $_POST["nb1"]; // déclarer une variable en lui précisent le type (float) pour savoir que se sont des nombre 
            $nb2 = (float) $_POST["nb2"];

            $addition = $nb1 + $nb2;
            


            if (empty($nb1) OR empty($nb2)){ // si mes champs un ou deux son vides :
                echo "<h2 class='rouge'>Entrer <span>d</span>es valeurs</h2>";
            } else {                            // sinon : 
                echo "<p>Résultat : $addition<p/>";
            }




            echo "<br/>";
            echo "<br/> <p>floor de 1,8</p>";
            echo floor(1.8); // arrondir à l'entier du dessous (floor = sol)
            echo "<br/>";
            echo "<br/> <p>ceil de 1,8</p>";
            echo ceil(1.8); // arrondir à l'entier du dessus (ceil = plafond)

            echo"<h1>exo treffle</h1>";
            echo "<br/>";
            echo "Hé regardez : &clubs; &#196;";
        
            echo"<h1>exo dollard</h1>";
            echo "<br/>";
            $monDollard = "Il y a du dollard dans l'air";
            print $monDollard;

            echo"<h1>exo accents</h1>";
            echo "<br/>";
            $laBête = "C'est bien un âne";
            print $laBête ;
?>


</body>
</html>