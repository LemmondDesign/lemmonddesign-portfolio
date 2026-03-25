<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $image_src = "../img/userresearch.webp";
  $project_title = "User Testing and Explainer Videos";
  $project_domain = "Interaction Design"; 
  $caption = "How do we teach students that design is not 'finished' at the prototype stage? This assignment focuses on the critical, evidence-based process of user testing, forcing students to validate (or invalidate) their assumptions by observing real users.";
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
    <iframe src="https://www.youtube.com/embed/videoseries?si=AQC08tMe6kFzmjMc&amp;list=PLLiNGfLvG2aymNF6tKX7bIoGMpLLiXzY0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p class="detail-cap">
      <strong>Pedagogical Inquiry:</strong>How do we teach students that design is not "finished" at the prototype stage? This assignment focuses on the critical, evidence-based process of user testing, forcing students to validate (or invalidate) their assumptions by observing real users.<br><br>
      <strong>Outcome:</strong> A series of student-produced explainer videos that document the user testing process. This teaches students how to articulate their design-thinking process, a skill essential for case studies and job interviews.
    </p>
  </div>

</div>

<nav class="bottom-nav">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?>
</nav>

</body>

</html>