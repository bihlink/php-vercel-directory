<?php 
require_once('inc/config.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= $seotitle; ?></title>
  <?php include('inc/inhead.php'); ?>
  <meta name="description" content="<?= $seodesc; ?>" />
  <link rel="canonical" href="<?= $rooturl; ?>/">
	<meta name="image" content="<?= $rooturl; ?>/img/bihlink.jpg">
	<!-- Schema.org Tags -->
	<meta itemprop="name" content="<?= $seotitle; ?>">
	<meta itemprop="description" content="<?= $seodesc; ?>">
	<meta itemprop="image" content="<?= $rooturl; ?>/img/bihlink.jpg">
	<!-- Opengraph Tags & Twitter Cards -->
	<meta property="og:title" content="<?= $seotitle; ?>">
	<meta property="og:description" content="<?= $seodesc; ?>">
	<meta property="og:image" content="<?= $rooturl; ?>/img/bihlink.jpg">
	<meta property="og:url" content="<?= $rooturl; ?>/">
	<meta property="og:site_name" content="<?= $seotitle; ?>">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="website">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@abidnev">
	<meta name="twitter:creator" content="@abidnev">
	<meta name="twitter:title" content="<?= $seotitle; ?>">
	<meta name="twitter:description" content="<?= $seodesc; ?>">
	<meta name="twitter:image" content="<?= $rooturl; ?>/img/bihlink.jpg">
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-arrow-up-circle"></i></button>
<?php include('inc/navbar.php'); ?>
    <div class="container">
      <h1>Fedirectory</h1>
    </div><!-- container -->
<?php include('inc/footer.php'); ?>
</body>
</html>
