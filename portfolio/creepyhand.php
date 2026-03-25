<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $image_src = "../img/creepyhand.webp";
  $project_title = "Creepy Hand";
  $project_domain = "Motion Design"; 
  $caption = "How can we teach students to see beyond the software and integrate tactile, physical materials into their digital workflows? This exploration demonstrates a hybrid approach to VFX, asking: How can practical effects (like the visceral texture of handling raw meat) be combined with digital compositing (keying and masking) to create surreal, unsettling imagery that neither medium could achieve alone?";
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
  <iframe src="https://www.youtube.com/embed/JiPnbhsTfjY" title="Halloween VFX Loop" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  
  <p class="detail-cap">
    <strong>Pedagogical Inquiry:</strong> How can we teach students to see beyond the software and integrate tactile, physical materials into their digital workflows? This exploration demonstrates a hybrid approach to VFX, asking: How can practical effects (like the visceral texture of handling raw meat) be combined with digital compositing (keying and masking) to create surreal, unsettling imagery that neither medium could achieve alone?<br><br>
    <strong>Outcome:</strong> A looping, surreal animation that serves as a proof-of-concept for students. It illustrates that high-impact "creepy" effects often rely not just on After Effects mastery, but on creative, practical problem-solving in the physical world.
  </p>
</div>

</div>

<nav class="bottom-nav">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?> <!-- Use root-relative path -->
</nav>

</body>

</html>