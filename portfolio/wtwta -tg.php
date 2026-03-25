<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
  $image_src = "../img/WTWTA-1.jpg";
  $project_title = "WTWTA";
  $project_domain = "AR + Animation"; 
  $caption = "This poster moves when viewed through a smart device (augmented reality). I drew everything using Procreate, Illustrator, Photoshop, and After Effects and coded with the HTML, CSS, and JavaScript languages. The poster imagines what it might look like to approach “Where The Wild Things Are,” an imaginary world filled with party animals enjoying a playful romp. A combination of the moon and island landscape reveals the face of Carol, the most recognizable Wild Thing. My artwork diverges from the visual style of the book “Where The Wild Things Are” by Maurice Sendak (1963). I animated everything to “Wake Up” by Arcade Fire, the main theme from the 2009 film “Where The Wild Things Are” by Spike Jonze.";
?>
  <title><?php echo $project_title; ?></title> <!-- Dynamically populate title -->
  <link rel="stylesheet" href="/styles.css">
</head>
<body>

<div class="tg_details">

  <div class="tg_detail item1">
    <img class="tg_prj_art" src="<?php echo $image_src; ?>" alt="Project Image">
  </div>

  <div class="tg_detail item2">
    <h1 class="prj-tit-fnl"><?php echo $project_title; ?></h1>
    <h2 class="prj-dmn-fnl"><?php echo $project_domain; ?></h2>
    <p class="detail-cap"><?php echo $caption; ?></p>
  </div>

  <div class="tg_detail item2">
    <iframe  class="tg_prj_art" src="https://www.youtube.com/embed/RwPZQdZJKec?si=G-VCa2dcEluj0Jh0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p class="detail-cap">You can print the static image and scan it with a smart device to see the augmented reality in action.</p>
  </div>

  <div class="tg_detail">
    <a href="./portfolio/wtwta-xr-vimeo/index.html" target=“_blank”><button class="prj-btn" >View AR Poster</button></a>
  </div>

  <div class="tg_detail">
    <img class="tg_prj_art" src="../img/WTWTA-instructions.png" alt="Project Image">
    <p class="detail-cap">FYI, you may need to grant Lemmonddesign.com access to your camera.</p>
  </div>


</div>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?> 
</body>
</html>