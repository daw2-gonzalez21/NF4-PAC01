<html>
 <head>
  <title>Multipurpose Form</title>
  <style type="text/css">
  <!--
td {vertical-align: top;}
  -->
  </style>
 </head>
 <body>
 <?php
 echo 'La suma de los numeros es: ';
 $n1 = $_POST['numero1'];
 $n2 = $_POST['numero2'];
 $n3 = $_POST['numero3'];
 $suma = $n1 + $n2 + $n3;
 echo $suma;
 ?>
 </body>
</html>