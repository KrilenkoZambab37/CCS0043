<?php $currentPage = basename($_SERVER['PHP_SELF']); // For active page in navbar ?>
<!DOCTYPE html>
<html lang="en">
    <style>
        body, html {
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        .navbar a:hover:not(.active) {
            background-color: #ddd;
            color: black;
        }
        .active {
            background-color: #04AA6D;
            color: white;
        }
        .story-nav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            position: relative;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
    </style>
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Short Stories</title>
      <link rel="stylesheet" href="style.css" />
    </head>
    <body>
      <nav class="navbar">
        <ul class="story-nav">
          <li>
              <a href="index.php" class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">
                  <img src="images/HomeButton.png" alt="Home" class="nav-icon" style="height: 15px">
              </a>
          </li>
          <li><a href="story1.php" class="<?= ($currentPage == 'story1.php') ? 'active' : '' ?>">One Summer Night</a></li>
          <li><a href="story2.php" class="<?= ($currentPage == 'story2.php') ? 'active' : '' ?>">The Night Came Slowly</a></li>
          <li><a href="story3.php" class="<?= ($currentPage == 'story3.php') ? 'active' : '' ?>">The Coming of the King</a></li>
          <li><a href="story4.php" class="<?= ($currentPage == 'story4.php') ? 'active' : '' ?>">The Ransom of Red Chief</a></li>
          <li><a href="story5.php" class="<?= ($currentPage == 'story5.php') ? 'active' : '' ?>">The Wind's Tale</a></li>
        </ul>
      </nav>
    </body>
</html>