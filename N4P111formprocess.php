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
     <td>Movie name: </td>
     <td>
      <?php echo $_POST['movie_name']; ?>
     </td>
    </tr>
    <tr>
     <td>Movie rating: </td>
     <td>
      <?php echo $_POST['rating']; ?>
     </td>
    </tr>
    <tr>
     <td>Movie comment:</td>
     <td>
      <?php echo $_POST['comment']; ?>
     </td>
    </tr>
   </table>
<?php
if (isset($_POST['debug'])) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}
?>
 </body>
</html>