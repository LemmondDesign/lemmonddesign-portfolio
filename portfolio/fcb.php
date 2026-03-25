<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
  $image_src = "../img/fcb-1.png";
  $project_title = "First Citizens Bank";
  $project_domain = "Typography + Motion Design"; 
  $caption = "I designed a video series for First Citizens Bank they could use on social media and in their lobbies.";
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
    <iframe src="https://www.youtube.com/embed/bt4l5sJCrPQ?si=ruuBueXFxiWH8QXn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>

  <div class="detail">
    <p class="detail-cap">Professional Practice: The client, a major bank, required a series of motion graphics to engage customers on social media platforms and on in-lobby digital displays. My role was to design and animate a full video series, ensuring the motion, typography, and branding were consistent and effective for both passive (in-lobby) and active (social media) viewing contexts.</p>
    <p class="detail-cap">Outcome: A complete, versatile, three-part animation campaign that provided the client with a series of flexible digital assets to communicate key touchpoints to customers.</p>
  </div>


  <div class="detail">
    <iframe src="https://www.youtube.com/embed/wE69CshA0qw?si=wZT8ducLKuq78J8Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>

  <div class="detail">
    <iframe src="https://www.youtube.com/embed/0rMa-OL8b2o?si=q_IIyvZjG4Zruq3m" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>

</div>

<nav class="bottom-nav">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?> <!-- Use root-relative path -->
</nav>

</body>

</html>