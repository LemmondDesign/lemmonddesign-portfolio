<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $image_src = "../img/crowdsourcing-1.png";
  $project_title = "Crowdsourcing";
  $project_domain = "Interaction Design"; 
  $caption = "Open-Ended Question: How can a crowdsourcing app resolve a user’s complaint by empowering them to input a small amount of data and see the impact of their contribution (DataViz) on a larger community?";
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
    <iframe src="https://www.youtube.com/embed/videoseries?si=UXTLCE5Q9PSyRJ5w&amp;list=PLLiNGfLvG2axuesskMp58TmzDlvjuDyn2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <h1 class="prj-tit-fnl" >Fall 2021 @TU</h1>
    <p class="detail-cap">Students worked in a group and individually through:Benchmarking, Personas, Pain Points, User Journey Maps, Scenarios, Task Flow Analysis, Wireframes, User Testing, Naming, Branding, Lo-Fi Prototypes, Hi-Fi Prototypes, and an Explainer Video.</p>
  </div>

  <div class="detail">
    <iframe src="https://www.youtube.com/embed/videoseries?si=fcolF9MWWPlGuA5M&amp;list=PLLiNGfLvG2ayaKSfTxDQ76dgK5goTQcJx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <h1 class="prj-tit-fnl" >Spring 2021 @KSU</h1>
    <p class="detail-cap">Students worked in a group and individually through:Benchmarking, Personas, Pain Points, User Journey Maps, Scenarios, Task Flow Analysis, Wireframes, User Testing, Naming, Branding, Lo-Fi Prototypes, Hi-Fi Prototypes, and an Explainer Video.</p>
  </div>

  <div class="detail">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?si=P40HeyTTqCLe4dKF&amp;list=PLLiNGfLvG2awdgQhmvV27j25Ts2NCkzFX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <h1 class="prj-tit-fnl" >Fall 2017 @NCSU as a TA</h1>
    <p class="detail-cap">In the course “Online and Mobile Interaction Design Systems,” Dr. Armstrong trusted me to assist in critiques, lectures, and tutorials (motion and interactive prototyping).</p>
  </div>





</div>

<nav class="bottom-nav">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?>
</nav>

</body>

</html>