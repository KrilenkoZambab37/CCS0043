<?php
session_start();

$_SESSION["color1"] = $_POST["color1"];
$_SESSION["color2"] = $_POST["color2"];
$_SESSION["color3"] = $_POST["color3"];
$_SESSION["color4"] = $_POST["color4"];
$_SESSION["color5"] = $_POST["color5"];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Favorite Colors Result</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #e3f2fd, #ffffff);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .result-container {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      width: 400px;
    }

    h2 {
      text-align: center;
      color: #2c3e50;
      margin-bottom: 25px;
    }

    .color-item {
      padding: 10px;
      margin: 5px 0;
      border-left: 6px solid #3498db;
      background-color: #f0f6ff;
      border-radius: 5px;
      font-size: 16px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .color-swatch {
      width: 25px;
      height: 25px;
      border-radius: 4px;
      border: 1px solid #ccc;
      margin-left: 10px;
    }
  </style>
</head>
<body>

<div class="result-container">
  <h2>ResultColors.php</h2>

  <?php
  for ($i = 1; $i <= 5; $i++) {
      $color = htmlspecialchars($_SESSION["color$i"]);
      echo "<div class='color-item'>My Favorite Color $i: $color";
      if (!empty($color)) {
          echo "<span class='color-swatch' style='background-color: $color;'></span>";
      }
      echo "</div>";
  }
  ?>
</div>
</body>
</html>