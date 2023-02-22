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
	<meta name="image" content="https://bihlink.com/inc/img/bihlink.jpg">
	<!-- Schema.org Tags -->
	<meta itemprop="name" content="<?= $seotitle; ?>">
	<meta itemprop="description" content="<?= $seodesc; ?>">
	<meta itemprop="image" content="https://bihlink.com/inc/img/bihlink.jpg">
	<!-- Opengraph Tags & Twitter Cards -->
	<meta property="og:title" content="<?= $seotitle; ?>">
	<meta property="og:description" content="<?= $seodesc; ?>">
	<meta property="og:image" content="https://bihlink.com/inc/img/bihlink.jpg">
	<meta property="og:url" content="<?= $rooturl; ?>/">
	<meta property="og:site_name" content="<?= $seotitle; ?>">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="website">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@abidnev">
	<meta name="twitter:creator" content="@abidnev">
	<meta name="twitter:title" content="<?= $seotitle; ?>">
	<meta name="twitter:description" content="<?= $seodesc; ?>">
	<meta name="twitter:image" content="https://bihlink.com/inc/img/bihlink.jpg">
	<style>
	    a {text-decoration:none;}
	    .img-fluid {
          width: 100%;
          max-height: 220px;
          object-fit: cover;
        }
	</style>
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-arrow-up-circle"></i></button>
<?php include('inc/navbar.php'); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
	<h3>Fediverse Timeline</h3>
	<?php echo file_get_contents('https://fedi.bihlink.com/embed/timeline.php?in=masto.ai&t=fed'); ?>
        </div>
        <div class="col-md-4">
            <h3>Trending Hashtags</h3>
          <?php
            $string = file_get_contents('https://masthash.labnotes.org/');
            $pattern = '/\\<tr\\>(.*)\\<\\/tr\\>/';
            $result = preg_match ($pattern, $string, $matches );
	    $matches = str_replace('/tags/', 'https://fedi.bihlink.com/tags/', $matches);
            echo "<table style='width:100%;'>$matches[0]</table>";
          ?>
	  <iframe allowfullscreen sandbox="allow-top-navigation allow-scripts" width="100%" height="1000" src="https://nitter.bihlink.com/abidnev"></iframe>
        </div>
      </div>
    </div><!-- container -->
<?php include('inc/footer.php'); ?>
</body>
</html>
