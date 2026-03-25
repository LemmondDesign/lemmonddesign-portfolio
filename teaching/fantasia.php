<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $image_src = "../img/fantasia-1.png";
  $project_title = "Fantasia";
  $project_domain = "Motion Design"; 
  $caption = "Here is a collection of the best student work in a special project I call 'Fantasia.' Like the original Disney animation, students visualize instrumental music with non-objective art. Students were encouraged to film and include “Practical Effects” like smoke, sand, water, etc.";
  ?>
  <title><?php echo $project_title; ?></title> <!-- Dynamically populate title -->
  <link rel="stylesheet" href="/styles.css">
</head>
<body>
<div class="details">
  <div class="detail">
    <img class="project__artwork" src="<?php echo $image_src; ?>" alt="Project Image">
    <h1 class="prj-tit-fnl"><?php echo $project_title; ?></h1>
    <h2 class="prj-dmn-fnl"><?php echo $project_domain; ?></h2>
    <p class="detail-cap"><?php echo $caption; ?></p>
  </div>

  <div class="detail">
    <h1 class="prj-tit-fnl">Systems & Behaviors</h1>
    <h2 class="prj-dmn-fnl" >Fall 2022 @TU and Spring 2024 @UofM</h2>
    <p class="detail-cap">Open-Ended Question: How can a designer communicate a musician’s originally intended meaning via the interaction of non-objective, system-based graphics that are precisely set in motion to individual sounds within a non-lyrical, animated music video?</p>
  </div>

  <div class="detail">
    <iframe src="https://www.youtube.com/embed/videoseries?si=6CuNDgnCWRK1OtL8&amp;list=PLLiNGfLvG2ayKtgDTiQkRpWJz00V8J2eq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>

  <div class="detail">
    <h1 class="prj-tit-fnl">Colourmusic</h1>
    <h2 class="prj-dmn-fnl" >Fall 2021 @TU</h2>
    <p class="detail-cap">Open-Ended Question: How can non-objective motion graphics communicate the meaning of instrumental music? How can non-objective motion graphics perfectly match individual sounds in instrumental music?</p>
    <p class="detail-cap">Special Guest: Lead singer of the Oklahoma band Colourmusic, Ryan Hendrix, spoke to students about the meaning of his instrumental music.</p>
  </div>

  <div class="detail">
    <iframe src="https://www.youtube.com/embed/videoseries?si=aq6dUE6wfTPuqXG7&amp;list=PLLiNGfLvG2azBquSPRPEffbmQhe-aqE_n" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>

</div>

<nav class="bottom-nav">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?>
</nav>

</body>

</html>