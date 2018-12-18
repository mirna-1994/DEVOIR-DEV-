<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Liste des controleurs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php
echo "<h1> <center> Liste des Controlleurs </center> </h1>";
include 'cnx.php';
$sql= $cnx->prepare("select id, nom, prenom from controleur");
$sql->execute();
echo "<table width='80%' cellspacing='5'>";
echo "<tr>";
echo"<th>NOM</th>";
echo"<th>PRENOM</th>";
echo"<th>LIENS</th>";
echo"</tr>";
foreach ($sql->fetchAll (PDO::FETCH_ASSOC) as $ligne) {
echo "<tr>";
echo "<td align='center'>" . $ligne['nom'] . "</td>";
echo "<td align='center'>" . $ligne['prenom'] . "</td>";
echo "<td align='center'> <a href='page2.php?idyaMina=". $ligne['id'] ."&esm=".$ligne['nom']."&esmo=".$ligne['prenom']."'> Tous les clients </a> </td>";
echo "</tr>";
}
echo "</table>";
?>
</body>
</html>