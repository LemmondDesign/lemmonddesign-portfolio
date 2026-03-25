<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $image_src = "../img/alltheinteractionprojects-1.png";
  $project_title = "All The Interactive Student Projects";
  $project_domain = "AR + Interaction Design"; 
  $caption = "Here is a collection of the best student work in the category of interaction design. You will see augmented reality, prototyping, and more. ";
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
    <iframe src="https://www.youtube.com/embed/videoseries?si=xk9BeGW1G5Jujw2R&amp;list=PLLiNGfLvG2awNzyRzvWh99O_414gZDySt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <h1 class="prj-tit-fnl" >Fall 2022 @TU</h1>
    <p class="detail-cap">Open-Ended Question: How can a designer bridge digital and physical experiences in both print and AR?</p>
  </div>
  
  <div class="detail">
    <iframe src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2FNMoO8YeKyh6PRTPBrY5eoz%2FDesign-Incubation%3Fnode-id%3D243-89%26starting-point-node-id%3D243%253A89%26mode%3Ddesign%26t%3DsAs0Mc1zovcFMwva-1" allowfullscreen></iframe>
    <h1 class="prj-tit-fnl" >Fall 2022 @TU</h1>
    <p class="detail-cap">Problem three introduces students to interactive prototyping. Students use Figma to make interactive prototypes they can test on their phones or computer. They develop visual thinking skills by making interactive components that communicate a mood. For example, make a toggle button that moves playfully or a dropdown menu that moves shyly. Students discuss prototypes with a few groups of students that give them a cross-section of ideas and solutions for their mood and component solution. This matrix can generate inspiration, iteration, and collaboration because while each cell presents a unique problem, it shares commonalities with others and even user testing.</p>
  </div>

  <div class="detail">
    <iframe src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2FiJJDwW5SYXsrbWyKCMjuag%2FFall21-2063-Rianne-Brown%3Fpage-id%3D2%253A59%26type%3Ddesign%26node-id%3D120-411%26viewport%3D477%252C32%252C0.14%26t%3DTpG0eihmrIi3M4Au-1%26scaling%3Dscale-down%26starting-point-node-id%3D120%253A411%26mode%3Ddesign" allowfullscreen></iframe>
    <iframe src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2Fk1K5w6LqWjWn9m4aBE8uxR%2FFall21-2063-Kellen-Moreland%3Fpage-id%3D0%253A1%26type%3Ddesign%26node-id%3D102-247%26viewport%3D501%252C439%252C0.39%26t%3DwMlCpikwKbnEDmPj-1%26scaling%3Dscale-down%26starting-point-node-id%3D102%253A247%26mode%3Ddesign" allowfullscreen></iframe>
    <h1 class="prj-tit-fnl" >Fall 2021 @TU</h1>
    <p class="detail-cap">How can interactive design (UX/UI) components communicate and practice design principles?</p>
  </div>

  <div class="detail">
    <iframe src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2FZQLrfRRGygXGRsCEgzf6uL%2FRisk-(Fall21-Group-1)%3Fpage-id%3D0%253A1%26type%3Ddesign%26node-id%3D8-198%26viewport%3D445%252C244%252C0.2%26t%3DpTPFxOeWMV2xWGD5-1%26scaling%3Dscale-down%26starting-point-node-id%3D8%253A198%26mode%3Ddesign" allowfullscreen></iframe>
    <iframe src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2F7rpddxWFbtaDFUGJKF7Oas%2FRisk-(Fall21-Group-2)%3Fpage-id%3D0%253A1%26type%3Ddesign%26node-id%3D318-5211%26viewport%3D673%252C340%252C0.07%26t%3DTxhwEeYMsuSYLomm-1%26scaling%3Dscale-down%26starting-point-node-id%3D318%253A5211%26mode%3Ddesign" allowfullscreen></iframe>
    <h1 class="prj-tit-fnl" >Fall 2021 @KTU</h1>
    <p class="detail-cap">Open-Ended Question: How can the digital experience of playing Risk feel more physical? Within the assigned context, how can the UX/UI be improved when playing Risk digitally?</p>
  </div>
  
  <div class="detail">
    <iframe allow="accelerometer; ambient-light-sensor; camera; encrypted-media; geolocation; gyroscope; hid; microphone; midi; payment; usb; vr; xr-spatial-tracking" sandbox="allow-forms allow-modals allow-popups allow-presentation allow-same-origin allow-scripts allow-downloads allow-pointer-lock" src="https://zusbt.csb.app/" title="ART300-Project5-Zack Parr" id="sandbox-preview"></iframe>
    <h1 class="prj-tit-fnl" >Fall 2020 @KSU</h1>
    <p class="detail-cap">Rullo is a math-based game where the user removes numbers from the grid so that the remaining numbers in each row or column add up to the numbers at the beginning and end of the given row or column.</p>
  </div>
</div>

<nav class="bottom-nav">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?>
</nav>

</body>

</html>