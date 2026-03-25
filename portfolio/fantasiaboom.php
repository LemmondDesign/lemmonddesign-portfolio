<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $image_src = "../img/fantasiaboom.webp";
  $project_title = "Fantasia: Transdisciplinary Collaboration Systems";
  $project_domain = "Motion Design"; 
  $caption = "Exploring the symbiotic relationship between movement and sound through interdisciplinary collaboration. This experiment paired undergraduate designers with graduate music composers in a 'blind' collaboration, requiring them to build a cohesive audio-visual system based on non-objective abstract parameters. I partnered with music composer Professor Mahir Cetiz. This project was solved with a mix of 2D After Effects, 3D Blender, and practical VFX.";
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
    <iframe src="https://www.youtube.com/embed/_HaHIOugaf8?si=35ONoAQDMWuEx7O7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  <p class="detail-cap">
      <strong>Pedagogical Inquiry:</strong> How can design students be taught to collaborate effectively with non-designers on a purely abstract concept? This project simulates a high-level, interdisciplinary challenge by randomly pairing undergraduate animators with graduate music composers. Given only a single word (e.g., "splash," "rumble"), they are tasked with building a cohesive audio-visual system while working in isolation for the first half of the project.<br><br>
      <strong>Outcome:</strong> A model for transdisciplinary teaching that mirrors the collaborative, cross-disciplinary environments found in leading research institutions.
    </p>
  </div>

</div>

<nav class="bottom-nav">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?> <!-- Use root-relative path -->
</nav>

</body>

</html>