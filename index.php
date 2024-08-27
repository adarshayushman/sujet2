<!DOCTYPE html>
<head>
<link rel="stylesheet" href="style.css">
<title>Evaluations maths CE1</title>
<script src="traitement.js"></script>
</head>
<body>

 <section class="quiz">
<?php session_start(); ?>
 <span class="echec"><?php
 
  echo "Ton score est de : ".$_SESSION["score"].", essaie encore !";
 
 ?></span>


 <form action="traitement.php" method="POST">
 <span><?php echo $_SESSION["Err"]."<br/>"; ?></span> 
 <label for="prenom">Prénom : </label><br>
 <input type="text" id="prenom" name="prenom" value=<?php if (isset($_COOKIE['prenom'])) {echo $_COOKIE['prenom'];} else {echo '';}; ?>><br><br>
 <fieldset>
 Calcul mental :</br>
 10 + 3 = <input class="operation" type="text" id="op1" name="op1" onchange=""><br>
 9 + 9 = <input class="operation" type="text" id="op2" name="op2"><br>
 7 + 13 = <input class="operation" type="text" id="op3" name="op3"><br>

 </fieldset>
 <br><br>
 <fieldset>
 829 est un nombre avec
 <select class="operation" name="centaine">
 <option value=""> -</option>
 <option value="1"> 1</option>
 <option value="2"> 2</option>
 <option value="3"> 3</option>
 <option value="4"> 4</option>
 <option value="5"> 5</option>
 <option value="6"> 6</option>
 <option value="7"> 7</option>
 <option value="8"> 8</option>
 <option value="9"> 9</option>
 </select> centaines +
 <select class="operation" name="dizaine">
 <option value=""> -</option>
 <option value="1"> 1</option>
 <option value="2"> 2</option>
 <option value="3"> 3</option>
 <option value="4"> 4</option>
 <option value="5"> 5</option>
 <option value="6"> 6</option>
 <option value="7"> 7</option>
 <option value="8"> 8</option>
 <option value="9"> 9</option>
 </select> dizaines +
 <select class="operation" name="unite">
 <option value=""> -</option>
 <option value="1"> 1</option>
 <option value="2"> 2</option>
 <option value="3"> 3</option>
 <option value="4"> 4</option>
 <option value="5"> 5</option>
 <option value="6"> 6</option>
 <option value="7"> 7</option>
 <option value="8"> 8</option>
 <option value="9"> 9</option>
 </select> unités <br><br>

 </fieldset>
 <br><br>
 <input onclick="soumettre()" type="submit" value="Vérifier">
 <input type="reset" value="effacer les réponses">
 </form>
 </section>
</body>
</html>