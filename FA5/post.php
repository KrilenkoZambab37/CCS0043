<?php
$firstname = htmlspecialchars($_POST["firstname"]);
$middlename = htmlspecialchars($_POST["middlename"]);
$lastname = htmlspecialchars($_POST["lastname"]);
$dob = htmlspecialchars($_POST["dob"]);
$address = htmlspecialchars($_POST["address"]);
?>

<!DOCTYPE html>
<html>
<head>
  <title>POST Result</title>
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

    .info-item {
      padding: 10px;
      margin: 5px 0;
      border-left: 6px solid #3498db;
      background-color: #f0f6ff;
      border-radius: 5px;
      font-size: 16px;
    }
  </style>
</head>
<body>

<div class="result-container">
  <h2>POST Submitted Data</h2>
  <div class="info-item">First Name: <?= $firstname ?></div>
  <div class="info-item">Middle Name: <?= $middlename ?></div>
  <div class="info-item">Last Name: <?= $lastname ?></div>
  <div class="info-item">Date of Birth: <?= $dob ?></div>
  <div class="info-item">Address: <?= $address ?></div>
</div>
</body>
</html>