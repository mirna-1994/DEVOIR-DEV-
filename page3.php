<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nouveau Releve</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="jquery.js"></script>

<script>

  function Add(n)

  {

      jQuery.ajax({

       type: "POST",

       url: "insert.php",

       data: 'n='+n,

       cache: false,

       success: function(response)

       {

         alert("Record successfully updated");

       }

     });

 }

</script>

</head>
</head>
<body>

<?php
include 'cnx.php';

echo "<h1> <center> Nouveau releve </center> </h1>";
echo "<form action='' method ='get'>";
echo "<label> Nom du client </label> <br>";
echo "<input type='text' size='20' value= ".$_GET['esm']."> <br>";

echo "<label> Prenom du client </label> <br>";
echo "<input type='text' size='20' value= ".$_GET['esmo']."> <br>";

echo "<label> Ancien Releve </label> <br>";
echo "<input type='text' size='20' value= ".$_GET['ancien']."> <br>";

echo "<label> Dernier Releve </label> <br>";
echo "<input type='text' size='20' name='old' value= ".$_GET['dernier']."> <br>";

echo "<label> Nouveau Releve </label> <br>";
echo "<input type='text' size='20' name='new'> <br>";

echo "<input type='hidden' name='var' value= ".$_GET['idcontroleur']."> <br>"; 
echo "<input type='button' id='button_id' value='Update' onClick='n(1);'>";

echo "</form>";
?>
</body>
</html>