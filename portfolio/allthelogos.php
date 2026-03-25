<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <?php
  $image_src = "../img/LogoDump-2.jpg";
  $project_title = "All The Logos";
  $project_domain = "Branding"; 
  $caption = "I love logo design. Here is a collection of my best logo designs from 2007 until now.";
  ?>


  <title><?php echo $project_title; ?></title> <!-- Dynamically populate title -->
  <link rel="stylesheet" href="/styles.css">
</head>
<body>



<div class="details">

  <div class="detail">
    <h1 class="prj-tit-fnl"><?php echo $project_title; ?></h1>
    <h2 class="prj-dmn-fnl"><?php echo $project_domain; ?></h2>
    <p class="detail-cap"><?php echo $caption; ?></p>
  </div>

    <div class="detail">
    <img class="project__artwork " src="<?php echo $image_src; ?>" alt="Project Image">
        <h1 class="prj-tit-fnl">Native Gardens Food</h1>

    <p class="detail-cap">Native Gardens Food is a USDA organic and free-range meat company. To communicate the company's commitment to free-ranged animals, I illustrated a single chicken moving in a large field of grass, undoubtedly eating rocks and bugs like nature intended.</p>

  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/LogoDump-7.jpg">  
    <h1 class="prj-tit-fnl">Beyond Zen</h1>
    <p class="detail-cap">After hours of research on the competition, word clouds and sketching I landed on a beautiful brand signature that communicated what Beyond Zen represented. The brandmark is a cute, asexual figure in motion forming the boat position, which is iconic in both yoga and pilates.</p>
  </div>

    <div class="detail">
    <img class="project__artwork" src="../img/LogoDump-6.jpg">
        <h1 class="prj-tit-fnl">Beyond Zen</h1>

    <p class="detail-cap">Additionally, the brandmark merges the letter B (for Beyond and Bridgette) with a heart to support the loving nature Beyond Zen wanted to create. I crafted the logotype to match the cuts and shapes found in the brandmark. The colors were selected to inspire relaxation and match the studio color scheme.</p>
  </div>


  <div class="detail">
    <img class="project__artwork" src="../img/LogoDump-1.jpg">
            <h1 class="prj-tit-fnl">Valholla Meade</h1>

    <p class="detail-cap">Only royals would drink from the horn in life, but in Valhalla, only slain Viking warriors drink from the horn! Mead is an ancient, honey-based, alcoholic beverage with many historical connections, the most notable being with the Norse (Vikings).</p>
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/LogoDump-8.jpg">
                <h1 class="prj-tit-fnl">Valholla Meade</h1>

    <p class="detail-cap">A classic wine glass appears by looking in the negative space between the two horns, connecting an ancient drink reserved for the best and its modern equivalent, Valholla Meade. Some might even see the horns as the bow of a longboat quickly approaching!</p>
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/LogoDump-10.jpg">
                <h1 class="prj-tit-fnl">Afinia Dental</h1>

    <p class="detail-cap">I didn’t want a significant change. It was important to hang onto the brand identity Afinia already had. I was inspired by David Airey’s book, “Logo Design Love,” which influenced me in visual brainstorming. I used the regular typeface and spread out the characters, so there was room.</p>
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/LogoDump-11.jpg">
                <h1 class="prj-tit-fnl">Afinia Dental</h1>

    <p class="detail-cap">I eliminated the green and used a much softer blue, making the arches translucent with an angelic, upward motion. When we did this rebranding, they were building a third location, a dental spa, so the rebranding coincided with that.</p>
  </div>




  <div class="detail">
    <img class="project__artwork" src="../img/LogoDump-3.jpg">
                <h1 class="prj-tit-fnl">KIS Branded Specialties</h1>

    <p class="detail-cap">KIS Branded Specialties keeps the world of promotional marketing products simple. They research the industry, explore potential products and deliver recommendations.</p>
  </div>

    <div class="detail">
    <img class="project__artwork" src="../img/LogoDump-4.jpg">
    <h1 class="prj-tit-fnl">KIS Branded Specialties</h1>
    <p class="detail-cap">More KIS Branded</p>
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/LogoDump-5.jpg">
    <h1 class="prj-tit-fnl">Blossom Health Coach</h1>
    <p class="detail-cap">Blossom supports you in opening up and realizing your beautiful self. Owner Kelly Thompson provides personal coaching to help you reach your health and wellness goals.</p>
  </div>

  <div class="detail">
    <img class="project__artwork" src="../img/LogoDump-9.jpg">
    <h1 class="prj-tit-fnl">enFocus</h1>
    <p class="detail-cap">What enFocus members saw as cells in their brandmark resembled beehives to the uninitiated. Nobody knew how to read it. There also were significant illegibility problems – thin lines or a yellow that caused the logotype to fade; a rasterized brandmark lacking scalability of a vector brandmark and preventing its use on embroidered shirts or promotional banners. I maintained a hexagon shape, but offset it as two pieces coming together to evoke a handshake and a lowercase e. The new brandmark and logotype demonstrated a left-to-right movement, communicating progress. I chose three warm colors from a more refined Pantone palette: gray (corporate, serious and strong), green (organic growth, an idea, ingenuity) and a golden yellow that carried over from their previous identity.</p>
  </div>


</div>

<nav class="bottom-nav">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?> <!-- Use root-relative path -->
</nav>

</body>

</html>