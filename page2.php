<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Liste des clients</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php
include 'cnx.php';
echo "<h1> <center> Liste des clients du controleur " .$_GET['esm']." - " .$_GET['esmo']." </center> </h1>";
$sql= $cnx->prepare("select identifiant, nom, prenom, ancienReleve, dernierReleve from client where idcontroleur='".$_GET['idyaMina']."'");
$sql->execute();
echo"<a href='index.php'> Home </a>";
echo "<table width='80%' cellspacing='5' align='center'>";
echo "<tr>";
echo"<th>NOM</th>";
echo"<th>PRENOMS</th>";
echo"<th>Ancien Releve</th>";
echo"<th>Dernier Releve</th>";
echo"<th>Liens</th>";
echo"</tr>";
foreach ($sql->fetchAll (PDO::FETCH_NUM) as $ligne) {
    echo "<tr>";
    echo "<td align='center'>" .$ligne[1]."</td>";
    echo "<td align='center'>" .$ligne[2]. "</td>";
    echo "<td align='center'>" .$ligne[3]. "</td>";
    echo "<td align='center'>" .$ligne[4]. "</td>";
    echo "<td align='center'> <a href='page3.php?idcontroleur=". $ligne[0] . "&esm=".$ligne[1]. "&esmo=".$ligne[2]. "&ancien=".$ligne[3]. "&dernier=".$ligne[4]."'> Statistiques </a> </td>";
    echo "</tr>";
}
echo "</table>"
?>
</body>
</html>