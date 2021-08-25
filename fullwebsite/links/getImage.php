<?php

  $id = $_GET['id'];
  // do some validation here to ensure id is safe

  require_once('config.php');
  $sql = "SELECT image FROM images WHERE id=$id";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);
  mysqli_close($conn);

  header("Content-type: image/jpg");
  echo $row['image'];
  echo $sql;
?>