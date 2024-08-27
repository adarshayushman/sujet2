<?php 

session_start();

if ($_POST['prenom'] == '') {
    $_SESSION["Err"] = "N'oublie pas d'ecrire ton prénom !";
    header("Location: index.php");
} else {
    $_SESSION["Err"] = "";

    setcookie('prenom', $_POST['prenom'], time() + 365*24*3600);
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $op3 = $_POST['op3'];
    $centaine = $_POST['centaine'];
    $dizaine = $_POST['dizaine'];
    $unite = $_POST['unite'];
    $score = 0;

    if ($op1 == 13) {
        $score++;
    }
    if ($op2 == 18) {
        $score++;
    }
    if ($op3 == 20) {
        $score++;
    }
    if ($centaine == 8) {
        $score++;
    }
    if ($dizaine == 2) {
        $score++;
    }
    if ($unite == 9) {
        $score++;
    }


    $_SESSION["score"] = $score;

    if ($score < 6) {
        header("Location: index.php");
    } else {
        header("Location: bravo.php");
    }

    
}


?>