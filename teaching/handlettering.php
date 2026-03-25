<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $image_src = "../img/TTY1-640x350-2-529x270.jpg";
  $image_src = "/img/TTY1-640x350-2-529x270.jpg";
  $project_title = "Student Hand-Lettering + Typography";
  $project_domain = "Typography"; 
  $caption = "Open-Ended Question: How can a designer communicate the [intended meaning] of a [quote] using hand-lettering and movement?";
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
    <iframe src="https://www.youtube.com/embed/videoseries?si=5Yqt_VYq6InKrXmN&amp;list=PLLiNGfLvG2azUglM6NY-9frz6bro7smiB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <h2 class="prj-dmn-fnl" >Spring 2021 @KSU</h2>
  </div>

  <div class="detail">
    <h1 class="prj-tit-fnl">Cognitive Theories with Type</h1>
    <h2 class="prj-dmn-fnl" >Spring 2017 @OSU</h2>
    <p class="detail-cap">This assignment asked students to research two different cognitive theories and enact them with a typographic poster. Students were directed to watch three segments of the National Geographic show “Brain Games” and take notes.</p>
  </div>

    <div class="detail">
    <img class="project__artwork" src="../img/Lemmond20-CO_Page_03.jpg">
    <img class="project__artwork" src="/img/Lemmond20-CO_Page_03.jpg">
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/Lemmond20-CO_Page_04.jpg">
    <img class="project__artwork" src="/img/Lemmond20-CO_Page_04.jpg">
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/Lemmond20-CO_Page_05.jpg">
    <img class="project__artwork" src="/img/Lemmond20-CO_Page_05.jpg">
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/Lemmond20-CO_Page_06.jpg">
    <img class="project__artwork" src="/img/Lemmond20-CO_Page_06.jpg">
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/Lemmond20-CO_Page_07-960x1242.jpg">
    <img class="project__artwork" src="/img/Lemmond20-CO_Page_07-960x1242.jpg">
  </div>

  <div class="detail">
    <h1 class="prj-tit-fnl">Visual Semantics with Type</h1>
    <h2 class="prj-dmn-fnl" >Spring 2017 @OSU</h2>
    <p class="detail-cap">In this assignment, students explore the power of visual semantics by altering or manipulating type.</p>
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/Lemmond20-CO_Page_10-960x1242.jpg">
    <img class="project__artwork" src="/img/Lemmond20-CO_Page_10-960x1242.jpg">
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/Lemmond20-CO_Page_09-960x1242.jpg">
    <img class="project__artwork" src="/img/Lemmond20-CO_Page_09-960x1242.jpg">
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/Lemmond20-CO_Page_11-960x1241.jpg">
    <img class="project__artwork" src="/img/Lemmond20-CO_Page_11-960x1241.jpg">
  </div>


  <div class="detail">
    <h1 class="prj-tit-fnl">Type as Signifier</h1>
    <h2 class="prj-dmn-fnl" >Spring 2017 @OSU</h2>
    <p class="detail-cap">Type as Signifier: Visual semantics deals with the use and manipulation of words (letters) to illustrate an idea, an action, or evoke some particular pictorial image. This involves the treatment and arrangement of letters in such a way as to make a word visually self-explanatory. – Paul Rand: A Designer’s Art</p>
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/Lemmond20-CO_Page_13-960x1242.jpg">
    <img class="project__artwork" src="/img/Lemmond20-CO_Page_13-960x1242.jpg">
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/Lemmond20-CO_Page_15-960x1242.jpg">
    <img class="project__artwork" src="/img/Lemmond20-CO_Page_15-960x1242.jpg">
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/Lemmond20-CO_Page_16-960x1242.jpg">
    <img class="project__artwork" src="/img/Lemmond20-CO_Page_16-960x1242.jpg">
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/Lemmond20-CO_Page_14-960x1242.jpg">
    <img class="project__artwork" src="/img/Lemmond20-CO_Page_14-960x1242.jpg">
  </div>


</div>

<nav class="bottom-nav">
  <?php require_once __DIR__ . '/../navbar.php'; ?>
</nav>

</body>

</html>