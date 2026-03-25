<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($page_title) ? $page_title : 'Teaching Portfolio'; ?></title>
  <link rel="stylesheet" href="/styles.css?v=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kotta+One&family=Slabo+27px&display=swap" rel="stylesheet">
</head>
<body>
  <?php if (isset($page_description)): ?>
  <p class="project_welc"><?php echo $page_description; ?></p>
  <?php endif; ?>