<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $image_src = "../img/productdesigner3.webp";
  $project_title = "I am a Product Designer";
  $project_domain = "Product Design"; 
  $caption = "This video serves as a manifesto of my product design philosophy. I break down my approach to solving complex user problems, demonstrating how I move from initial research and strategy to high-fidelity prototyping. It highlights my commitment to evidence-based design, showing how I bridge the gap between creative vision and practical, user-centered application.";
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
    <iframe src="https://youtube.com/embed/XnzkDAE6DUU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  <p class="detail-cap">
    <strong>Pedagogical Inquiry:</strong> How can an educator demystify the "black box" of the design process and model the full lifecycle of a project for students? This video serves as a manifesto of my design philosophy, breaking down the approach to solving complex user problems by explicitly demonstrating the rigorous path from initial research and strategy to high-fidelity prototyping.<br><br>
    <strong>Outcome:</strong> A visual resource that highlights the necessity of evidence-based design. By documenting this process, I provide students with a clear framework for bridging the gap between abstract creative vision and practical, user-centered application.
  </p>
</div>

</div>

<nav class="bottom-nav">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?> <!-- Use root-relative path -->
</nav>

</body>

</html>