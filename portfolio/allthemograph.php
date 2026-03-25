<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $image_src = "../img/allthemograph-1.png";
  $project_title = "All The Mograph";
  $project_domain = "Motion Design + 3D"; 
  $caption = "Here are excerpts from my best motion work! It mixes academic research, client-based work, and a healthy amount of 2D humor.";
  ?>
  <title><?php echo $project_title; ?></title> <!-- Dynamically populate title -->
  <link rel="stylesheet" href="/styles.css">
</head>
<body>

<div class="details">

<div class="detail">
  <img class="project__artwork " src="<?php echo $image_src; ?>" alt="Project Image">
  <h1 class="prj-tit-fnl"><?php echo $project_title; ?></h1>
  <h2 class="prj-dmn-fnl"><?php echo $project_domain; ?></h2>
  <p class="detail-cap"><?php echo $caption; ?></p>
</div>

    <div class="detail">
    <p class="detail-cap">
      <strong>Professional and Academic Practice:</strong> A compilation of excerpts demonstrating technical and conceptual mastery in 2D/3D animation, kinetic typography, and VFX.
      <br><br>
      <strong>Outcome:</strong> This reel serves as a "proof of concept" for the high-level curriculum I am qualified to teach and lead, showing a mastery of the tools and theory from fundamentals to advanced production.
    </p>
  </div>

  
  <div class="detail">
    <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/785579803?h=e4ae669790&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
    <p class="detail-cap">Here are excerpts from my best motion work! It mixes academic research, client-based work, and a healthy amount of 2D humor.</p>
  </div>

  <div class="detail">
    <iframe src="https://www.youtube.com/embed/5N0D48ewRlM?si=wptIspywRTK0Ax5R" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p class="detail-cap">The orange outline was illustrated frame-by-frame with pencil and paper, while the rest was Interpolative animated using Adobe After Effects.</p>
  </div>

<div class="detail">
  <iframe src="https://www.youtube.com/embed/aC-MZyv-lao?si=a4E5APkEZRVx2xTF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  <p class="detail-cap">A Motion Study. Made frame-by-frame with pencil and paper.</p>
</div>


<div class="detail">
  <iframe src="https://www.youtube.com/embed/px2n3PcL7IU?si=hkX29Bg2w_YKb2o3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  <p class="detail-cap">Motion Theory: Event + Anticipation + Reaction. Made frame-by-frame with pencil and paper.</p>
</div>






</div>
<nav class="bottom-nav">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?> <!-- Use root-relative path -->
</nav>

</body>

</html>