<?php
if(isset($_GET['redirect'])){
  $url = $_GET['redirect'];
  header("Location: $url");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>리다이렉트 페이지</title>
</head>
<body>
  <h1>리다이렉트 페이지</h1>
  <form action="" method="get">
    <label>리다이렉트할 URL을 입력하세요:</label>
    <input type="text" name="redirect">
    <button type="submit">리다이렉트</button>
  </form>
</body>
</html>
