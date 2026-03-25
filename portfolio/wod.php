<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <?php
  $image_src = "../img/wod-1.png";
  $project_title = "The Web of Denial";
  $project_domain = "Motion Design"; 
  $caption = "Interdisciplinary Collaboration: For this piece, I interviewed Riley E. Dunlap. Dr. Dunlap, Oklahoma State University, co-authored Climate Change and Society: Sociological Perspectives. In the summer of 2016, Dr. Dunlap was appointed to the new 15-member National Advisory Committee for the U.S. Sustained National Climate Assessment conducted by NOAA and the U.S. Global Change Research Program. In July of 2016, 19 senators presented on this subject matter and referred to Dr. Dunlap’s work.";
  ?>

  <title><?php echo $project_title; ?></title> <!-- Dynamically populate title -->


  <title>WTWTA</title>
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
    <p class="detail-cap">Research Inquiry: An interdisciplinary project investigating how motion design can visualize and explain complex, "invisible" systems of misinformation. This project translates sociological research (an interview with Dr. Riley E. Dunlap) into an accessible public-facing animation.</p>
    <p class="detail-cap">Outcome: An animated short that blends digital animation with practical effects (watercolor, salt) to create a distorted, German Expressionist style, visually reinforcing the insidious nature of the content.</p>
  </div>

  <div class="detail">
    <iframe src="https://player.vimeo.com/video/194692597?h=2ebd92d66f" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
    <p class="detail-cap">What is an authority and who is a conformist? The Web of Denial is an insidious disinformation campaign meant to mislead the public about anthropogenic (human-caused) global warming, undermind experts in climate science, and line the pockets of the wealthiest people in the world. This piece attempts to explain how the Web of Denial works.</p>
  </div>

  

  <div class="detail">
    <img class="project__artwork" src="../img/wod-2.gif">
    <p class="detail-cap">Style: During WWI, German banned all imports. “A different approach to art was being taken as a result of Germany’s isolation.” Born out of oppression, German Expressionism (1910s-30s) denies realism in exchange for distortion, dystopia, and surrealism. In this piece, I chose German Expressionism as a stylistic influence because like the Web of Denial, it trades realism for distortion.</p>
  </div>

  <div class="detail">
    <iframe title="vimeo-player" src="https://player.vimeo.com/video/191967119?h=f6dbe050f0" allowfullscreen></iframe>
    <p class="detail-cap">Practical Effects: Practical effects are those that aren’t a digital preset. Instead, they use manual components to create a motion effect. For example, this pieces used water running past soil to create an erosive effect, it creates lines with watercolor and a hairdryer and making a sparkling night sky and shiny iceberg with salt and a desk lamp.</p>
  </div>



  <div class="detail">
    <p class="detail-cap">https://tinyurl.com/sw9a2bjr</p>
    <p class="detail-cap">https://www.youtube.com/watch?v=41BXw-8Ei5I</p>
    <p class="detail-cap">https://www.desmog.com//</p>
    <p class="detail-cap">https://skepticalscience.com/</p>

  </div>

</div>

<nav class="bottom-nav">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?> <!-- Use root-relative path -->
</nav>

</body>

</html>