<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $image_src = "../img/aiplusaedemos.png";
  $project_title = "AI-Driven Efficiency in After Effects";
  $project_domain = "AI + Motion Design"; 
  $caption = "In what ways can AI save motion designers time when using Adobe After Effects?";
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
    <iframe src="https://www.youtube.com/embed/videoseries?si=tKOXvCKh-3LiV1oN&amp;list=PLLiNGfLvG2ay0h2JFEp5EC42QouHcsSB4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p class="detail-cap">Pedagogical Inquiry: In what ways can AI save motion designers time when using Adobe After Effects? This inquiry investigates how emerging AI tools-both native (like Repeater and Masks) and external (like generative AI for writing expressions and scripts)-can automate technical tasks. The central pedagogical question is: How can we teach students to leverage AI to minimize time spent on manual labor, thereby shifting their focus from technical execution to conceptual, timing, and storytelling?</p>
    <p class="detail-cap">Outcome: A video tutorial series. This project will demonstrate and document practical, AI-driven workflows for motion designers. The resulting case studies provide a clear pedagogical framework for teaching students to work more efficiently, treating AI as a collaborative assistant to solve complex problems in less time.</p>
  </div>

</div>

<nav class="bottom-nav">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?>
</nav>

</body>

</html>