<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $image_src = "../img/legohiddenside-1.png";
  $project_title = "Lego Hidden Side";
  $project_domain = "Interaction Design + AR"; 
  $caption = "Open-Ended Question: How can our next Lego AR theme be more physically interactive (hands on bricks) than LHS? How can our next Lego AR theme improve the UX/UI problems observed in LHS? How can we tell the story of our next Lego AR theme to Lego stakeholders?";
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
    <iframe src="https://www.youtube.com/embed/videoseries?si=NYs2eYWUVqyhxkOT&amp;list=PLLiNGfLvG2ay2Z9N_VcVl1tQuJZjz2cC6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p class="detail-cap">Here's a YouTube playlist of the best student solutions.</p>
  </div>

  <div class="detail">
    <iframe src="https://www.youtube.com/embed/videoseries?si=yP3izy-VD40R6Eb4&amp;list=PLLiNGfLvG2azny9_lS7gW8aStq0dczfOC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p class="detail-cap">Here is a YouTube playlist of my interviews with real Lego Hidden Side users. Watch to see how I use design research strategies to try and identify pain points in the experience. Videos like these help students study UX/UI. </p>
  </div>

</div>

<nav class="bottom-nav">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?>
</nav>

</body>

</html>