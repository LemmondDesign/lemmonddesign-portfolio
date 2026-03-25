<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
  $image_src = "../img/Embedding-the-Cancer-Port_Page_1.jpg";
  $project_title = "Embedding the Cancer Port";
  $project_domain = "Typography"; 
  $caption = "This graduate project was an exploration of semiotic and semantic analysis. It’s based off the poem “Embedding the Cancer Port” by Robert King.";
  ?>

  <title><?php echo $project_title; ?></title> <!-- Dynamically populate title -->

  
  <link rel="stylesheet" href="/styles.css">
</head>
<body>



<div class="details">

  <div class="detail">
    <img class="project__artwork" src="<?php echo $image_src; ?>" alt="Project Image">


      </div>

  <div class="detail">
    <h1 class="prj-tit-fnl"><?php echo $project_title; ?></h1>
    <h2 class="prj-dmn-fnl"><?php echo $project_domain; ?></h2>
    <p class="detail-cap"><?php echo $caption; ?></p>
  </div>

    <div class="detail">
    <p class="detail-cap">
      <strong>Research Inquiry:</strong> An exploration into the semiotics and semantics of expressive typography. This project investigates how typographic form, composition, and kinetic behavior can visualize and amplify the complex emotional meaning of a written poem.
      <br><br>
      <strong>Outcome:</strong> A kinetic typography piece that translates Robert King's poem into a visual-temporal experience, demonstrating an academic approach to motion and typography as a form of critical analysis.
    </p>
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/Embedding-the-Cancer-Port_Page_2.jpg">
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/Embedding-the-Cancer-Port_Page_3.jpg">
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/Embedding-the-Cancer-Port_Page_4.jpg">
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/Embedding-the-Cancer-Port_Page_5.jpg">
  </div>

    <div class="detail">
    <img class="project__artwork" src="../img/Embedding-the-Cancer-Port_Page_6.jpg">
  </div>

</div>

<nav class="bottom-nav">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?> <!-- Use root-relative path -->
</nav>

</body>

</html>