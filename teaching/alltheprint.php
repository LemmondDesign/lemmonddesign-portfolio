<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $image_src = "../img/alltheprintprojects-1.png";
  $project_title = "Student Print Design";
  $project_domain = "Branding + Print Design"; 
  $caption = "Here is a collection of the best student work in the category of print design. You will see packaging, posters, and more. ";
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
    <h1 class="prj-tit-fnl">Sustainable Packaging</h1>
    <h2 class="prj-dmn-fnl" >Spring 2021 @KSU</h2>
    <p class="detail-cap">Open-Ended Question (for students): What would it look like to take an overpackaged product and reimagine it into something that still protects and communicates while making it more environmentally sustainable by reducing materials and giving said product a second life?</p>
    <p class="detail-cap">Open-Ended Question (for the professor): How do I equip soon to graduate seniors with a portfolio project that displays their awesome packaging ideas (packaging being something most impactful when held) when the world is meeting remotely and can’t physically hold their work? My answer was to give them several iterations that led to a final explainer video.</p>
  </div>

  <div class="detail">
    <iframe src="https://www.youtube.com/embed/videoseries?si=S9ECyc1qp9T5OqPy&amp;list=PLLiNGfLvG2aywtOWg-PWD3qevTgM-sI-e" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>

  <div class="detail">
    <h1 class="prj-tit-fnl">Kirjalo</h1>
    <h2 class="prj-dmn-fnl" >Spring 2021 @KSU</h2>
    <p class="detail-cap">"Kirja" Is a Finnish word for book. Students branded this sustainable, homey bookstore.</p>
  </div>

  <div class="detail">
    <iframe src="https://www.youtube.com/embed/6VDfMfF51bY?si=WqWMlXFCu_ps_Avc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>






  <div class="detail">
    <h1 class="prj-tit-fnl">Women’s Suffrage in Print</h1>
    <h2 class="prj-dmn-fnl" >Spring 2019 @NCSU</h2>
    <p class="detail-cap">Module 2: Computational Design Systems: In this assignment, students explore making grids with Shape Grammars and rules for how their design elements will fit into the grid. Then, they test their design system by creating two very different posters with the same rules.</p>
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/Lemmond20-x2-Web-960x1242.jpg">
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/Lemmond20-x7-Web.jpg">
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/Lemmond20-x6-Web.jpg">
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/Lemmond20-x3-Web.jpg">
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/Lemmond20-x4-Web.jpg">
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/Lemmond20-x-Web.jpg">
  </div>

</div>

<nav class="bottom-nav">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?>
</nav>

</body>

</html>