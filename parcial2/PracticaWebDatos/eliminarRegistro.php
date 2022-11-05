<?php

include 'conexion.php';

$id = $_GET["id"];

$sql = "DELETE FROM usuarios WHERE id=" . $id;

if($conexion->query($sql) === TRUE){
 echo "Se eliminó el registro con ID " .$id. "<br>";
 echo "<a href='consultarDatos.php'>Regresar</a>";

} else {
 echo "Ocurrió un error: ". $conexion->error ."</br>";
 echo "a href='consultarDatos.php'>Regresar</a>";
}


?>

<br><br><br><br>
<?php
  echo '<img src="https://th.bing.com/th/id/R.9f93a381794ff81ceabb5431dc468b88?rik=wAuTEjU9LBoGZg&riu=http%3a%2f%2fst.depositphotos.com%2f1001911%2f1554%2fv%2f950%2fdepositphotos_15540341-Thumb-up-emoticon.jpg&ehk=jMHZxwvAa%2bOgsfRzDRy7IbfmPbb%2fInUJF01HG0tsiE4%3d&risl=&pid=ImgRaw&r=0" alt="" class="Imagen" id="EmojiLike" width="600px" height="600px">';
?>
