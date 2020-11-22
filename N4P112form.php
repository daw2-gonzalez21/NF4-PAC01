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
  <form action="N4P113formprocess.php" method="post">
   <table>
    <tr>
     <td>Nombre:</td>
     <td>
      <input type="text" name="nombre">
     </td>
    </tr>
    <tr>
     <td>Apellidos:</td>
     <td>
      <input type="text" name="apellidos">
     </td>
    </tr>
    <tr>
     <td>Sexo: </td>
     <td>
        <input type="radio" name="boton" value="hombre"> Hombre
        <input type="radio" name="boton" value="mujer"> Mujer
     </td>
    </tr>
    <tr>
    <td>Deporte preferido: </td>
     <td>
        <select name="deporte">
            <option selected>...</option>
            <option value="Tenis">Tenis</option>
            <option value="Futbol">Futbol</option>
            <option value="Rugby">Rugby</option>
            
        </select>     
     </td>
    </tr>
    <tr>
     <td colspan="1" style="text-align: left;"> 
      <input type="submit" name="submit" value="Continuar" />
     </td>
    </tr>
   </table>
  </form>
 </body>
</html>