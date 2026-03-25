<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
  $image_src = "../img/thesis.png";
  $project_title = "Thesis";
  $project_domain = "VR + Product Design + 3D"; 
  $caption = "Virtual reality, a highly visual art form, is used worldwide as medicine. Right now, doctors are ordering things like, 'Play this VR experience and call me in the morning.' Surprisingly, few are researching this healthcare intervention from an artistic perspective.";
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
    <p class="detail-cap">Research Inquiry: Explores the intersection of virtual reality, game design, and therapeutic practice. This research investigates how VR can be used as a form of non-pharmacological "medicine" from a design perspective, moving beyond technical application to study artistic and human-centered approaches to healing.</p>
    <p class="detail-cap">Outcome: A "serious game" built in the Unity engine, designed to elicit specific psychological or physiological responses. The research was disseminated through presentations at major conferences, including the East Coast Game Conference.</p>
  </div>

  <div class="detail">
    <iframe  src="https://www.youtube.com/embed/-4wxMBsEvjk?si=5ANbQ852OH5ib1u4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p class="detail-cap">Video portion of my 2019 final 'thesis' project at NCSU.</p>
  </div>

  <div class="detail">
<iframe src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2FFSa2qtX3AD9bSalymtIxFM%2F2023-University-of-Tulsa-Faculty-Research-Symposium%3Fpage-id%3D0%253A1%26type%3Ddesign%26node-id%3D1-2%26viewport%3D97%252C200%252C0.08%26t%3DyQY5RmMAUPfgowFY-1%26scaling%3Dcontain%26mode%3Ddesign" allowfullscreen></iframe>
    <p class="detail-cap">Me presenting my research at the 2023 University of Tulsa Faculty Research Symposium.</p>
  </div>

  <div class="detail">
    <iframe  src="https://www.youtube.com/embed/iI5jD-7EAjM?si=toSNPgAZqqK2kEwy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p class="detail-cap">Me presenting my research at the 2022 Computer Simulation and Gaming Conference.</p>
  </div>

  <div class="detail">
    <iframe  src="https://www.youtube.com/embed/0Tgx3n-erhg?si=OGRr9mTYMu_YW1Lz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p class="detail-cap">Me presenting my research at the 2019 East Coast Gaming Conference.</p>
  </div>

  <div class="detail">
    <a href="../img/thesis-Lemmond-Final-Project.pdf" target=“_blank”><button class="prj-btn" >Read my full 2019 Thesis</button></a>
  </div>

</div>

<nav class="bottom-nav">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?> <!-- Use root-relative path -->
</nav>

</body>

</html>