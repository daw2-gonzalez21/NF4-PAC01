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
  <form action="N4P111formprocess.php" method="post">
   <table>
    <tr>
     <td>Select the movie:</td>
     <td>
      <select name="movie_name">
       <option value="La bella y la bestia">La bella y la bestia</option>
       <option value="El increible Hulk">El increible Hulk</option>
       <option value="Spider-Man">Spider-Man</option>
       <option value="Fast and Furious 5">Fast and Furious 5</option>
       <option value="Ocho apellidos vascos">Ocho apellidos vascos</option>
      </select>
     </td>
    </tr><tr>
     <td>Rate the movie:</td>
     <td>
      <input type="range" name="rating"
        min="1" max="5" step="1"/>
     </td>
    </tr><tr>
     <td>Leave a comment:<br/></td>
     <td>
        <textarea name="comment" rows="4" cols="40" placeholder="Write here"></textarea>
     </td>
    </tr><tr>
     <td> </td>
     <td><input type="checkbox" name="debug" checked="checked" />
      Display Debug info
     </td>
    </tr><tr>
     <td colspan="2" style="text-align: center;"> 
      <input type="submit" name="submit" value="Add" />
     </td>
    </tr>
   </table>
  </form>
 </body>
</html>