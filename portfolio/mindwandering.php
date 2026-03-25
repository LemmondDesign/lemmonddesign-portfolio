<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">



  <?php
  $image_src = "../img/mw-1.png";
  $project_title = "Mind-Wandering";
  $project_domain = "Product Design + 3D"; 
  $caption = "This graduate project is speculative. It contemplates the creation of a game that prompts mind-wandering and incorporates ideation sketching.";
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
    <p class="detail-cap">
      <strong>Research Inquiry:</strong> A speculative investigation into the cognitive state of "mind-wandering". This project asks, "What if a game were designed not to hold attention, but to intentionally induce a creative, meditative state?".
      <br><br>
      <strong>Outcome:</strong> A prototype (built in Unity) for a task-based virtual game designed to be undemanding, paired with a system to capture the user's resulting creative ideas. This serves as an example of speculative design and "research through making."
    </p>
  </div>


  <div class="detail">

    <p class="detail-cap">How might design ideation be impelled by an undemanding task-based game that elicits mind-wandering in a virtual world that displays live fragments of the user’s ideation process? </p>


    <p class="detail-cap">In design, ideation is the step where designers commence creating possible solutions without examining the practicality until a large number of solutions have been produced (Simon, 1969). The goal is to find an unknown solution which is the root of creativity, i.e., to discover the unknown.</p>

    <p class="detail-cap">Studies have suggested that individuals who mind-wander more frequently in their daily lives may be more creative in general (Baird, 2012).</p>

  </div>

  <div class="detail">

    <p class="detail-cap">But what kind of mind-wandering? Studies suggest that individuals that take breaks to participate in undemanding tasks are more likely to mind-wander than those who engage in demanding tasks, rest, or take no break at all (Baird, 2012).</p>

    <p class="detail-cap">But what are undemanding tasks? And what is the difference between undemanding tasks and demanding tasks? Studies suggest that demanding tasks require more encoding of stimuli and thus, create a higher memory load. On the other hand, undemanding tasks are not merely resting, instead of tasks that require less encoding of stimuli and as a result, create a lower memory load (Baird 2012).</p>
  </div>

  <div class="detail">
    <iframe src="https://player.vimeo.com/video/275676967?h=338a94f0c3" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
  </div>

  <div class="detail">
    <iframe src="https://www.youtube.com/embed/jHPNmz2MV4k?si=yZckct-TrOuA5J-r" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>

  <div class="detail">
    <iframe src="https://www.youtube.com/embed/4y7OvsRalk4?si=x-GVmshKqXvx8lq_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>

   <div class="detail">
    <iframe src="https://www.youtube.com/embed/d7gNTncRuDI?si=gH9VSoT-dBY-PnCE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>

  <div class="detail">
    <iframe src="https://www.youtube.com/embed/XcihGWSuwUI?si=q_iHkbntJbbNPl3-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>

  <div class="detail">
    <iframe src="https://www.youtube.com/embed/ogKwATKlYvo?si=cgUzJF0JRdf_E0OY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>

  <div class="detail">
    <iframe src="https://www.youtube.com/embed/F-vYwBUoUj4?si=Ka-DcgST6xYoioPZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>

</div>

<nav class="bottom-nav">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?> <!-- Use root-relative path -->
</nav>

</body>

</html>