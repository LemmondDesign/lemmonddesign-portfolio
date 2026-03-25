<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $image_src = "../img/WN-640x350-1.jpg";
  $project_title = "All The Print";
  $project_domain = "Awarded + Print Design"; 
  $caption = "Here are excerpts from my best print design work! ";
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
    <img class="project__artwork imgcoverwidth" src="../img/EN-640x350-12web.jpg">
    <p class="detail-cap">I designed the materials so when placed on a table; they formed a hexagon. Rather than just putting printed materials on a table, they could display them in a fun way. I’m a big advocate of every aspect of design.</p>
  </div>

  <div class="detail">
    <img class="project__artwork imgcoverwidth" src="../img/EN-640x350-11web.jpg">
    <p class="detail-cap">More enFocus...</p>
  </div>

  <div class="detail">
    <img class="project__artwork imgcoverwidth" src="../img/EN-640x350-8.jpg">
    <p class="detail-cap">More enFocus...</p>
  </div>

  <div class="detail">
    <img class="project__artwork imgcoverwidth" src="../img/NDSF-640x350-4.jpg">
    <p class="detail-cap">The 2012 Scholarship Fellowship Recognition Weekend focused around the event tagline, “Your gifts open the doors to a Notre Dame education.” This 15 piece campaign connects students and their specific donor(s) over this weekend.</p>
  </div>

  <div class="detail">
    <img class="project__artwork imgcoverwidth" src="../img/NDSF-640x350-1.jpg">
    <p class="detail-cap">More Scholarship Fellowship...</p>
  </div>

  <div class="detail">
    <img class="project__artwork imgcoverwidth" src="../img/NDSF-640x350-2.jpg">
    <p class="detail-cap">More Scholarship Fellowship...</p>
  </div>

  <div class="detail">
    <img class="project__artwork imgcoverwidth" src="../img/AD-640x350-11.jpg">
    <p class="detail-cap"> Afinia’s original print ads were jam-packed, and themselves put in mailers chock full of stuff. I redesigned the ads with a light, sparkly clean design and sophisticated offers. We used low amounts of typography to set a sharp contrast to every other piece in the mailers. We compared how well each ad ran. We found after a while that the mailers themselves were ineffective, so we stopped. I also helped them establish social networking and Google ad words, and make software choices.</p>
  </div>


  <div class="detail">
    <img class="project__artwork imgcoverwidth" src="../img/WN-640x350-2.jpg">
    <p class="detail-cap">World Neighbors...</p>
  </div>

  <div class="detail">
    <img class="project__artwork imgcoverwidth" src="../img/WN-640x350-3.jpg">
    <p class="detail-cap">World Neighbors...</p>
  </div>


  <div class="detail">
    <img class="project__artwork imgcoverwidth" src="../img/TEDX-640x350-2.jpg">
    <p class="detail-cap">TEDxOKC...</p>
  </div>

  <div class="detail">
    <img class="project__artwork imgcoverwidth" src="../img/TEDX-640x350-3.jpg">
    <p class="detail-cap">TEDxOKC...</p>
  </div>

    <div class="detail">
    <img class="project__artwork imgcoverwidth" src="../img/TEDX-640x350-4.jpg">
    <p class="detail-cap">TEDxOKC...</p>
  </div>

    <div class="detail">
    <img class="project__artwork imgcoverwidth" src="../img/TEDX-640x350-5.jpg">
    <p class="detail-cap">TEDxOKC...</p>
  </div>




</div>
<nav class="bottom-nav">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?> <!-- Use root-relative path -->
</nav>

</body>

</html>