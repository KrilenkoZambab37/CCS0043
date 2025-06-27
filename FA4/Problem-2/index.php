<?php

$names = [
    "chrisa", "michael", "samantha", "jordan", "alex", "bruce",
    "stephanie", "nathan", "olivia", "ethan", "madison", "lucas",
    "ava", "charlotte", "amelia", "liam", "isabella", "grace",
    "noah", "emily"
];

function processName($name) {
    return [
        'original'       => $name,
        'length'         => strlen($name),
        'ucfirst'        => ucfirst($name),
        'replace_vowels' => preg_replace('/[aeiou]/i', '@', $name),
        'pos_of_a'       => strpos($name, 'a') !== false ? strpos($name, 'a') + 1 : 'N/A',
        'reverse'        => strrev($name)
    ];
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Processed Names</title>
      <link rel="stylesheet" href="style.css" />
      <style>
        body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
          background: #fefefe;
        }

        .story-box {
          max-width: 90%;
          margin: 100px auto 2em;
          padding: 2em;
          background-color: #fff;
          border: 1px solid #ccc;
          box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
          border-radius: 8px;
        }

        h1 {
          text-align: center;
          margin-bottom: 1em;
        }

        table {
          width: 100%;
          border-collapse: collapse;
          text-align: center;
        }

        th, td {
          border: 1px solid #999;
          padding: 10px;
          word-break: break-word;
        }

        th {
          background-color: #333;
          color: white;
        }

        td {
          text-align: justify;
        }

        @media (max-width: 768px) {
          table, thead, tbody, th, td, tr {
            display: block;
          }

          th {
            text-align: left;
            background-color: #444;
            color: #fff;
          }

          td {
            text-align: left;
            border: none;
            padding-left: 40%;
            position: relative;
          }

          td:before {
            position: absolute;
            left: 10px;
            top: 10px;
            font-weight: bold;
            white-space: nowrap;
          }

          td:nth-of-type(1):before { content: "Name"; }
          td:nth-of-type(2):before { content: "Number of Characters"; }
          td:nth-of-type(3):before { content: "Uppercase First Character"; }
          td:nth-of-type(4):before { content: "Replace Vowels with @"; }
          td:nth-of-type(5):before { content: "Position of 'a'"; }
          td:nth-of-type(6):before { content: "Reverse Name"; }
        }
      </style>
    </head>
    <body class="story-container">
      <div class="story-box">
        <h1>List of Processed Names</h1>
        <table>
          <thead>
            <tr>
              <th>Name</th>
              <th>Number of Characters</th>
              <th>Uppercase First Character</th>
              <th>Replace Vowels with @</th>
              <th>Position of "a"</th>
              <th>Reverse Name</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($names as $name):
              $data = processName($name);
            ?>
              <tr>
                <td><?= htmlspecialchars($data['original']) ?></td>
                <td><?= $data['length'] ?></td>
                <td><?= htmlspecialchars($data['ucfirst']) ?></td>
                <td><?= htmlspecialchars($data['replace_vowels']) ?></td>
                <td><?= $data['pos_of_a'] ?></td>
                <td><?= htmlspecialchars($data['reverse']) ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </body>
</html>