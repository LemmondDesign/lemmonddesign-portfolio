<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $image_src = "../img/lifeitselfusipb2025.webp";
  $project_title = "Life Itself: An Augmented Reality Fantasia";
  $project_domain = "Awarded + AR + Motion Design"; 
  $caption = "Investigating the intersection of static print design and immersive media. This project utilizes Augmented Reality to extend the narrative, challenging the viewer to engage with the physical poster to reveal a digital, kinetic layer.";
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
  <iframe src="https://www.youtube.com/embed/16SM3dPaUJs" title="Life Itself: An Augmented Reality Fantasia" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

<p class="detail-cap">
    <strong>Research Inquiry:</strong> Investigating the intersection of static print design and immersive media. This project utilizes Augmented Reality to extend the narrative, challenging the viewer to engage with the physical poster to reveal a digital, kinetic layer.<br><br>
    <strong>Outcome:</strong> Selected for the 2nd United States International Poster Biennial (2025) for its innovative use of emerging technology in graphic design. This is an award bestowed upon only a fraction of the 11,845 entries from 93 countries. These selected posters will be exhibited across the United States, starting in Iowa, and internationally in countries like Poland and China throughout 2026. The jury included keynote judge David Carson.
  </p>
  
</div>

</div>

<nav class="bottom-nav">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?> <!-- Use root-relative path -->
</nav>

</body>

</html>