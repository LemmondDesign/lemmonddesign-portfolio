<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lemmond Design</title>
  <link rel="stylesheet" href="styles.css?v=1.0">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kotta+One&family=Slabo+27px&display=swap" rel="stylesheet">

</head>

<body>
  <?php
    // Define project pages once to be used for filtering and for generating cards
    $project_pages = array(
        "./portfolio/fantasiaboom.php",
        "./portfolio/socialvideo.php",
        "./portfolio/lifeitselfusipb2025.php",
        "./portfolio/productdesigner.php",
        "./portfolio/LegoHiddenSide.php",
        "./portfolio/afiniadental.php",
        "./portfolio/littlebees.php",
        "./portfolio/fcb.php",
        "./portfolio/hereu.php",
        "./portfolio/wtwta.php",
        "./portfolio/allthelogos.php",
        "./portfolio/allthewebsites.php",
        "./portfolio/allthemograph.php",
        "./portfolio/alltheprint.php",
        "./portfolio/port.php",
        "./portfolio/mindwandering.php",
        "./portfolio/creepyhand.php",
        "./portfolio/thesis.php",
        "./portfolio/wod.php"
    );
  ?>

  <p class="project_welc">Matthew Lemmond is a multidisciplinary Experience Designer focused on clear product expression and visual storytelling. With over a decade of experience running full-cycle design projects—from static branding to motion and video—he builds highly organized, high-fidelity solutions that help businesses build trust, educate their audiences, and scale their visual assets.</p>

  <div id="project_cards_container"> 

      <?php
      // Loop through project pages and fetch image source and caption
foreach ($project_pages as $index => $project) {
    // Get the contents of the project page
    ob_start();
    include($project);
    $content = ob_get_clean();

    // Extract image source and caption
    preg_match('/<img[^>]+src="([^"]+)"[^>]*>/', $content, $img_matches);
    $image_src = isset($img_matches[1]) ? $img_matches[1] : '';
    preg_match('/<h1 class="prj-tit-fnl">(.*?)<\/h1>/s', $content, $title_matches); // Extract project title
    $project_title = isset($title_matches[1]) ? $title_matches[1] : '';
    preg_match('/<h2 class="prj-dmn-fnl">(.*?)<\/h2>/s', $content, $domain_matches); // Extract project domain
    $project_domain = isset($domain_matches[1]) ? $domain_matches[1] : '';
    preg_match('/<p class="detail-cap">(.*?)<\/p>/s', $content, $caption_matches);
    $caption = isset($caption_matches[1]) ? $caption_matches[1] : '';




// Determine the background color based on the project title
$bg_color = 'var(--black27)'; // Default background color

if ($project_title === "First Citizens Bank") {
    $bg_color = '#003e00'; // Set background color for "First Citizens Bank" project
} elseif ($project_title === "Little Bees") {
    $bg_color = 'var(--orange2)'; // Set background color for "Little Bees" project
} elseif ($project_title === "WTWTA") {
    $bg_color = '#003e00'; // Set background color for "WTWTA" project
} elseif ($project_title === "Fantasia: Transdisciplinary Collaboration Systems") {
    $bg_color = '#6c0061ff'; // Set background color for "WTWTA" project
}



    // Output the image, project title, project domain, and caption within cards
    echo '<div class="project_card" data-domain="' . htmlspecialchars($project_domain) . '" style="background-color: ' . $bg_color . '">';
    echo '<a href="' . $project . '">';

    echo '<div class="project_artwork_container">';
    echo '<img src="' . $image_src . '" alt="Project Image" class="project_artwork_index">'; // Display project title
    echo '</div>';

    echo '<h1 class="prj-tit-index">' . $project_title . '</h1>'; // Display project title
    echo '<h2 class="prj-dmn-index">' . $project_domain . '</h2>'; // Display project domain
    echo '<p class="prj-cap-index">' . $caption . '</p>';
    echo '</a>';
    echo '</div>';
}?>
</div> 
 
<nav class="bottom-nav">
  <div id="filter-container">
    <select id="filter-select" onchange="filterProjects(this.value)">
      <option value="all">Filter Projects by Domain</option>
      <?php
      require_once __DIR__ . '/functions.php'; // This should be at the top
      $all_domains = get_project_domains($project_pages); // Now call the function
      foreach ($all_domains as $domain) {
          echo '<option value="' . htmlspecialchars($domain) . '">' . htmlspecialchars($domain) . '</option>';
      }
      ?>
    </select>
  </div>

  <?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.php'; ?>
</nav>
 
  <script>
    function filterProjects(domain) {
      const cards = document.querySelectorAll('.project_card');
      cards.forEach(card => {
        const cardDomains = card.getAttribute('data-domain').split(' + ').map(d => d.trim());
        if (domain === 'all' || cardDomains.includes(domain)) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });

      // Active button styling
      const buttons = document.querySelectorAll('.filter-btn');
      const select = document.getElementById('filter-select');

      // We don't have buttons anymore, but we can ensure the select is synced
      // although `onchange` handles this naturally.
      if (select.value !== domain) {
        select.value = domain;
      }

      // If you had separate buttons, you would manage their 'active' class here.
      // Since we only have a select, we don't need to manage active states on buttons.
    }

  </script>

</body>
</html>
