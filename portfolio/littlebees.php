<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $image_src = "../img/LB-Bottle.webp";
  $project_title = "Little Bees";
  $project_domain = "Awarded + Branding + 3D + Product Design"; 
  $caption = "I named the company and created its hand-lettered logo, which was featured in Logo Lounge's latest edition, book 14. I also designed almost everything you see their brand on, from animations to bottles. I even built an educational presentation in Figma, which is so much cooler than PowerPoint or Google Slides.";
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




  <div class="detail item3">
    <img class="project__artwork imgcover" src="../img/LB-LogoLounge1.png">
    <p class="detail-cap">With 30,000 submissions vying for a spot, the competition was stiff, but we are thankful to the kind folks at Logo Lounge and their jury of world-famous designers for awarding our logo a spot in their latest edition, book 14.</p>
  </div>


  <div class="detail">
    <p class="detail-cap">Professional Practice: A comprehensive identity project demonstrating the full scope of client-based work, from market research and hand-lettered logomarks to a scalable system involving 3D renders, packaging, and animation.</p>
    <p class="detail-cap">Outcome: Recognized for excellence in craft and professional execution by publication in Logo Lounge, Book 14.</p>
  </div>

  <div class="detail">
    <img class="project__artwork imgcover" src="../img/LB-Inspo.PNG">
    <p class="detail-cap">The tight tracking (space between letters) of the Little Bees logo drew inspiration from the tight, organic lines bees naturally make with wax. </p>
  </div>

  <div class="detail">
    <iframe src="https://www.youtube.com/embed/Mc9p26R_Asw?si=HTt5-ayhjko5r5LD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p class="detail-cap">This is an education video I filmed, animated, and edited.</p>
  </div>

  <div class="detail">
    <iframe src="https://www.youtube.com/embed/5A5Fj_g9-_Y" title="3D Little Bees logo, made in Blender" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p class="detail-cap">I can also do 3D work in Blender.</p>
  </div>
  
  <div class="detail">
    <a href="https://www.figma.com/proto/dlprxCi3YH4trOQCH3650M/Little-Bees-Educational-Presentation?kind=proto&node-id=126-424&page-id=0%3A1&scaling=contain&t=Y8MMaVfNssGxXoH4-1&type=design&viewport=303%2C70%2C0.08" target="_blank"><img class="project__artwork imgcover" src="../img/LB-Logo-White on Black.jpg">
    </a>
    <p class="detail-cap">This is a presentation created with Figma to educate potential investors. Click full screen to learn all about bees.</p>
  </div>

  <div class="detail">
    <iframe  src="https://www.youtube.com/embed/2mwz4kZTzfA?si=oqSbRlbiBWbiaeH1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p class="detail-cap">A logo bumper animation.</p>
  </div>

  <div class="detail">
    <iframe src="https://www.youtube.com/embed/79liZdU4TQM?si=SHRQskc9GsC3J5lF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p class="detail-cap">This is a swag video I filmed and edited. Check out our glow-in-the-dark sticker at the end!</p>
  </div>

  <div class="detail">
    <iframe src="https://www.youtube.com/embed/Ul0qt0bEqO0?si=DJc6zgEK14Wm9GPH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <p class="detail-cap">With a clear label, the honey can shine through!</p>
  </div>

  <div class="detail">
    <img class="project__artwork imgcover" src="../img/LB-Soccer3.jpg">
    <p class="detail-cap">I did not design the jerseys, but it is pretty cool to see our brand supporting such a cute little crew of soccer girls.</p>
  </div>

  <div class="detail">
    <img class="project__artwork imgcover" src="../img/LB-Bottles1.JPG">
    <p class="detail-cap">Our bottles are on the shelves at The Farm Hippie in Collinsville, OK.</p>
  </div>

  <div class="detail">
    <img class="project__artwork imgcover" src="../img/LB-Tags.jpg">
    <p class="detail-cap">This was the first time we got to see the logo on something.</p>
  </div>

  <!-- <div class="detail">
    <img class="project__artwork imgcover" src="../img/LB-Logo-White on Black.jpg">
  </div> -->

</div>

<nav class="bottom-nav">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?> <!-- Use root-relative path -->
</nav>

</body>

</html>