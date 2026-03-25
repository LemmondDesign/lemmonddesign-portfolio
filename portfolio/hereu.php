<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <?php
  $image_src = "../img/HERE-U-1.jpg";
  $project_title = "HERE-U Inclusive Hearing";
  $project_domain = "Product Design + AI"; 
  $caption = "Together with my cohort at NCSU, we theorized how machine learning could improve the conversational experience of a DHH (Deaf or Hard-of-Hearing) user. Through machine learning, the HERE-U system adapts microphones in hearing aids or cochlear implants to focus on what the user wants to hear. Our goal was to create a more natural conversation experience without requiring the user to monitor a device constantly.";
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
    <iframe src="https://www.youtube.com/embed/trbrgdE6fzA?si=yf6rKLAzQC527cUr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p class="detail-cap">Research Inquiry: A speculative design inquiry into Human-Centered AI for the Deaf and Hard of Hearing (DHH) community. Co-theorized with my NC-State cohort using IBM tools, this project proposes a wearable system that utilizes machine learning to create a more natural, inclusive conversational experience.</p>
    <p class="detail-cap">Outcome: Cited as a case study in Big Data, Big Design by Helen Armstrong, demonstrating the ethical application of AI in user experience design.</p>
  </div>


  <div class="detail">
    <a href="../img/Here-u-2.pdf" target=“_blank”><button class="prj-btn" >View our presentation to IBM here</button></a>
  </div>


  <div class="detail">
    <img class="project__artwork imgcoverwidth" src="../img/Here-u-3.png">
    <p class="detail-cap">Our work was referenced on page 20 of “Big Data. Big Design: Why Designers Should Care about AI” by Helen Armstrong.</p>
  </div>




</div>

<nav class="bottom-nav">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?> <!-- Use root-relative path -->
</nav>

</body>

</html>