<?php
// Make sure the user selected a movie type if they're adding a
// movie. If not, then send them back to the first form.
?>
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
   <table>
    <tr>
     <td>Nombre: </td>
     <td>
      <?php echo ucfirst($_POST['nombre']); ?>
     </td>
    </tr>
    <tr>
     <td>Apellidos:</td>
     <td>
      <?php echo ucfirst($_POST['apellidos']); ?>
     </td>
    </tr>
    <tr>
     <td>Sexo:</td>
     <td>
      <?php echo ucfirst($_POST['boton']); ?>
     </td>
    </tr>
    <tr>
     <td>Deporte favorito:</td>
     <td>
      <?php echo ucfirst($_POST['deporte']); ?>
     </td>
    </tr>
   </table>
 </body>
</html>