<?php
require ("C:\laragon\www\PHP\poo/form.php"); // chemin

$form = new Form($_POST);
?>

<form action="#" method="post">

    <?php

    echo $form->input('username'); // afficher input

    echo $form->input('password'); // "" "" "" 

    echo $form->submit(); // "" "" ""

?>

</form>