<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $image_src = "../img/allthemographprojects-1.png";
  $project_title = "All The Mograph Student Projects";
  $project_domain = "Motion Design"; 
  $caption = "Here is a collection of the best student work in the category of motion graphics. You will see VFX, animation, and more.";
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
    <iframe src="https://www.youtube.com/embed/videoseries?si=1N5U41quD7v8T_uF&amp;list=PLLiNGfLvG2awUZ4TzVoI25qnS8FDSqZ82" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <h1 class="prj-tit-fnl" >Fall 2022 @TU</h1>
    <p class="detail-cap">Open-Ended Question: How can designers communicate their studious observation, illustration, and mimicry skills with an animation that blends physical and digital forms of making? The first step to successfully designing motion is to become a studious observer of motion (Stone & Wahlin, 2018, p290). Motion designers watch all aspects of their life, from technology to nature and everything in between. Students studied the 12 Principles of Animation (Illusions of Life).</p>
  </div>

  <div class="detail">
    <iframe src="https://www.youtube.com/embed/videoseries?si=CqHRva_GQ1oFqLic&amp;list=PLLiNGfLvG2ay6-JVhyp1iKJVjnZb8I_Ah" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <h1 class="prj-tit-fnl" >Fall 2021-2023 @TU</h1>
    <p class="detail-cap">Open-Ended Question: How can a designer communicate a story of their choice to the beneficiary?</p>
  </div>


  <div class="detail">
    <iframe src="https://www.youtube.com/embed/videoseries?si=-fhJ1CXZWbz3uJKd&amp;list=PLLiNGfLvG2ax64lScGw2_wXE7ZvvnFy0z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <h1 class="prj-tit-fnl" >Fall 2022 @TU</h1>
    <p class="detail-cap">How can a designer communicate the basic elements of two-dimensional design using motion graphics?</p>
  </div>

  <div class="detail">
    <iframe src="https://www.youtube.com/embed/videoseries?si=u59gcwoeKoP5fzCO&amp;list=PLLiNGfLvG2azn2yP6UUerrWfKjLv5SUBR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <h1 class="prj-tit-fnl" >Spring 2019 @NCSU as a TA</h1>
    <p class="detail-cap">Module 3: Animated Design Systems: In this assignment, students take their printed posters from Module 2 and explore how their message changes when setting their work in motion. Then, they study how their work changes when put into a real-life scenario.</p>
  </div>


</div>

<nav class="bottom-nav">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?>
</nav>

</body>

</html>