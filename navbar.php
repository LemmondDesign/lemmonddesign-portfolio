<?php
$current_page = basename($_SERVER['PHP_SELF']);
$request_uri = $_SERVER['REQUEST_URI'];
?>

<div class="navbar">
    <a href="/index.php" class="navlink <?php echo ($current_page == 'index.php' || strpos($request_uri, '/portfolio/') !== false) ? 'active' : ''; ?>">Portfolio</a>
    <a href="/teaching.php" class="navlink <?php echo ($current_page == 'teaching.php' || strpos($request_uri, '/teaching/') !== false) ? 'active' : ''; ?>">Teaching</a>
    <!-- <a href="/about.php" class="navlink <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">About</a> -->
    <a href="https://www.linkedin.com/in/matthew-lemmond-mgd-bfa-567907159" target="_blank" class="navlink">LinkedIn</a>
    <!-- <a href="/contact.php" class="navlink <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact</a> -->
</div>