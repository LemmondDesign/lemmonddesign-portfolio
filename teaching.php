<?php
$page_title = "Teaching Portfolio";
$page_description = "Matthew Lemmond is an Assistant Professor and Design Educator specializing in technical skill and critical inquiry. Bridging professional readiness with experimental play, his pedagogy explores Extended Reality (XR), service-oriented design, and transdisciplinary collaboration in the classroom.";
include __DIR__ . '/header.php';
?>

<?php
    // Define project pages for this page
    $project_pages = array(
        "./teaching/aiplusaedemos.php",
        "./teaching/userresearch.php",
        "./teaching/fantasia.php",
        "./teaching/2023cdea.php",
        "./teaching/legohiddenside.php",
        "./teaching/crowdsourcing.php",
        "./teaching/allthemographprojects.php",
        "./teaching/alltheinteractionprojects.php",
        "./teaching/handlettering.php",
        "./teaching/alltheprint.php",
    );
  ?>

  <div id="project_cards_container">
      <?php
      // Loop through project pages and fetch image source and caption
      foreach ($project_pages as $index => $project) {
          // Get the contents of the project page
          ob_start();
          @include($project);
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

          if ($project_title === "Teaching to Diverse Academic Backgrounds") {
              $bg_color = '#552189';
          } elseif ($project_title === "All The Mograph Student Projects") {
              $bg_color = '#ab0000';
          } elseif ($project_title === "User Testing and Explainer Videos") {
              $bg_color = '#87005fff';
          }

          // Output the image, project title, project domain, and caption within cards
          echo '<div class="project_card" data-domain="' . htmlspecialchars($project_domain) . '" style="background-color: ' . $bg_color . '">';
          echo '<a href="' . $project . '">';
          echo '<div class="project_artwork_container">';
          echo '<img src="' . $image_src . '" alt="Project Image" class="project_artwork_index">';
          echo '</div>';
          echo '<h1 class="prj-tit-index">' . $project_title . '</h1>';
          echo '<h2 class="prj-dmn-index">' . $project_domain . '</h2>';
          echo '<p class="prj-cap-index">' . $caption . '</p>';
          echo '</a>';
          echo '</div>';
      }?>
  </div> 

<nav class="bottom-nav">
  <div id="filter-container">
    <?php
      require_once __DIR__ . '/functions.php'; // This should be at the top
      $all_domains = get_project_domains($project_pages); // Now call the function
    ?>
    <select id="filter-select" onchange="filterProjects(this.value)">
      <option value="all">Filter Project by Domain</option>
      <?php foreach ($all_domains as $domain) { echo '<option value="' . htmlspecialchars($domain) . '">' . htmlspecialchars($domain) . '</option>'; } ?>
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

    // Sync dropdown with active filter, though onchange handles this.
    const filterSelect = document.getElementById('filter-select');
    if (filterSelect && filterSelect.value !== domain) {
      filterSelect.value = domain;
    }
  }
</script>
</body>
</html>
