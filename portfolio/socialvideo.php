<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $image_src = "../img/rejection-sucks.png";
  $project_title = "Rejection Sucks";
  $project_domain = "Motion Design"; 
  $caption = "Social media video editing strategies.";
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
    <iframe src="https://youtube.com/embed/X3cb0ADA-JQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  <p class="detail-cap">Over the past few months, I've been using my kitchen as a creative laboratory—not just for dialing in homemade pizza and hot sauce recipes, but for testing social media engagement. I started filming my cooking experiments to figure out exactly what holds a viewer's attention and how pacing affects the story. To push the boundaries on this latest video, I challenged myself to learn a couple of new AI video editing programs to see how they could speed up my workflow and enhance the final product. Here are 3 video editing strategies I learned that apply just as much to B2B content strategy as they do to a cooking reel: 1. Lead with text. 2. Do something weird. 3. Keep editing simple. Whether you are designing for a complex software product or showing off a recipe, it always comes back to product expression and engaging the human on the other side of the screen. Check out the video below to see the AI tools in action!</p>
  </div>

</div>

<nav class="bottom-nav">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?> <!-- Use root-relative path -->
</nav>

</body>

</html>