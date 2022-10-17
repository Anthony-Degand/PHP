<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset\css\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>test Heredoc</h1>
    <?php
    $prenom = 'toto';

    echo "Bonjour $prenom, c'est aujourd'hui le grand jour ! ";

    echo "<br/>";

    echo <<<EOT
    "Bonjour $prenom, c'est aujourd'hui le grand jour ! ";
    EOT;

    ?>
    <h1> exo tableau php/bootstrap </h1>
    <?php
        $client1 = ["nom" => "toto","prenom" => "titi","age" => "24", "sexe" => "M", "profession" => "developpeur" ];
        $client2 = ["nom" => "tutu","prenom" => "tata","age" => "34", "sexe" => "F", "profession" => "Vendeur" ];
        $client3 = ["nom" => "lali","prenom" => "lala","age" => "44", "sexe" => "F", "profession" => "Chômeur" ];
      
    ?>
     <table class="table">
        <tr>
            <td scope="col">Nom</td>
            <td scope="col">Prenom</td>
            <td scope="col">Age</td>
            <td scope="col">Sexe</td>
            <td scope="col">Profession</td>
        </tr>

        
        <tr>
            <td><?php echo $client1["nom"];?></td>
            <td><?php echo $client1["prenom"];?></td>
            <td><?php echo $client1["age"];?></td>
            <td><?php echo $client1["sexe"];?></td>
            <td><?php echo $client1["profession"];?></td>
        </tr>

        <tr>
            <td><?php echo $client2["nom"];?></td>
            <td><?php echo $client2["prenom"];?></td>
            <td><?php echo $client2["age"];?></td>
            <td><?php echo $client2["sexe"];?></td>
            <td><?php echo $client2["profession"];?></td>
        </tr>

        <tr>
            <td><?php echo $client3["nom"];?></td>
            <td><?php echo $client3["prenom"];?></td>
            <td><?php echo $client3["age"];?></td>
            <td><?php echo $client3["sexe"];?></td>
            <td><?php echo $client3["profession"];?></td>
        </tr>
    </table> 

 <h1>tabeau tableau/heredoc</h1>   

<?php
echo<<<EOT
<table>
<tr>
    <td scope="col">Nom</td>
    <td scope="col">Prenom</td>
    <td scope="col">Age</td>
    <td scope="col">Sexe</td>
    <td scope="col">Profession</td>
</tr>


<tr>
    <td> {$client1["nom"]}</td>
    <td> {$client1["prenom"]}</td>
    <td> {$client1["age"]}</td>
    <td> {$client1["sexe"]}</td>
    <td> {$client1["profession"]}</td>
</tr>

<tr>
    <td> {$client2["nom"]}</td>
    <td> {$client2["prenom"]}</td>
    <td> {$client2["age"]}</td>
    <td> {$client2["sexe"]}</td>
    <td> {$client2["profession"]}</td>
</tr>

<tr>
    <td> {$client3["nom"]}</td>
    <td> {$client3["prenom"]}</td>
    <td> {$client3["age"]}</td>
    <td> {$client3["sexe"]}</td>
    <td> {$client3["profession"]}</td>
</tr>
</table>
EOT;
?>
<h1>exo printf et sprintf</h1>
<?php

$euro=6.55957;

printf("%.2f FF<br />",$euro);

$money1 = 68.75;

$money2 = 54.35;

$money = $money1 + $money2;

// echo $money affichera "123.1";

echo "1 affichage sans printf : " . $money . "<br />";

$monformat = sprintf("%01.2f", $money);



// echo $monformat affichera "123.10"

echo "affichage avec printf : " . $monformat . "<br />";

$year="2002" ;

$month="4";

$day="5";

$varDate = sprintf("%04d-%02d-%02d", $year, $month, $day);

// echo $varDate affichera "2002-04-05"

echo "affichage avec sprintf : " . $varDate;

echo "<br/>";

$num = 5;
$location = 'tree';

$format = 'there are %d monkeys in the %s';
echo sprintf($format, $num,$location);

?>



</body>
</html>