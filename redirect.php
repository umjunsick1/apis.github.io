<?php
if(isset($_GET['redirect'])){
  $url = $_GET['redirect'];
  header("Location: $url");
  exit();
}
?>
