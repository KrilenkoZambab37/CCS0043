<?php require('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Short Stories</title>
        <link rel="stylesheet" href="style.css"/>

        <style>
            h1 {
                text-align: center;
                font-family: "Book Antiqua";
            }
            p {
                padding-bottom: 5px;
            }
            .story-image {
                text-align: center;
            }
            .story-description {
                text-align: justify;
                font-family: "JetBrains Mono Thin";
                padding-top: 20px;
            }
            .story-box {
                max-width: 800px;
                margin: 100px auto 2em; /* top margin pushes below navbar */
                padding: 2em;
                background-color: #fff;
                border: 1px solid #ccc;
                box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
                border-radius: 8px;
            }
            .story-box img {
                max-width: 100%;
                height: auto;
                border-radius: 4px;
            }
        </style>
    </head>
    <body class="story-container">
        <div class="story-box">
            <h1>The Night Came Slowly</h1>
            <h4 class="story-author" style="font-size:1.25rem; font-weight:600;">
                <cite>by <a href="/author/kate-chopin" itemprop="author">Kate Chopin</a></cite>
            </h4>
            <div class="story-image">
                <img src="images/the-night-came-slowly.png" alt="The Night Came Slowly">
            </div>
            <div class="story-description" style="margin-bottom:2em;">
                <p>I am losing my interest in human beings; in the significance of their lives and their actions. Some one has said it is better to study one man than ten books. I want neither books nor men; they make me suffer. Can one of them talk to me like the night – the Summer night? Like the stars or the caressing wind?</p><p>The night came slowly, softly, as I lay out there under the maple tree. It came creeping, creeping stealthily out of the valley, thinking I did not notice. And the outlines of trees and foliage nearby blended in one black mass and the night came stealing out from them, too, and from the east and west, until the only light was in the sky, filtering through the maple leaves and a star looking down through every cranny.</p><p>The night is solemn and it means mystery.</p><p>Human shapes flitted by like intangible things. Some stole up like little mice to peep at me. I did not mind. My whole being was abandoned to the soothing and penetrating charm of the night.</p><p>The katydids began their slumber song: they are at it yet. How wise they are. They do not chatter like people. They tell me only: “sleep, sleep, sleep.” The wind rippled the maple leaves like little warm love thrills.</p><p>Why do fools cumber the Earth! It was a man’s voice that broke the necromancer’s spell. A man came to-day with his “Bible Class.” He is detestable with his red cheeks and bold eyes and coarse manner and speech. What does he know of Christ? Shall I ask a young fool who was born yesterday and will die tomorrow to tell me things of Christ? I would rather ask the stars: they have seen him.</p>
            </div>
        </div>
    </body>
</html>
<?php include('includes/footer.php'); ?>