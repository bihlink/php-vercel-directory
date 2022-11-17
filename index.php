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

	<!-- // Trending Videos -->
        <div class="row">
            <div class="col-12"><h2><i class="bi bi-play-btn"></i> U Trendu</h2></div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
                <?php
                $apidata = "https://invidious.sethforprivacy.com/api/v1/trending/?region=BA&pretty=1";
                $api = file_get_contents($apidata);
                $arr = json_decode($api, true);

                foreach(array_slice($arr, 0, 40) as $data) {
                $vidid = $data['videoId'];
                $title = $data['title'];
                $channelId = $data['authorId'];
                $channelTitle = $data["author"];
                $duzina = $data['lengthSeconds'];
                    if($duzina >= '3600') {
                        $time = gmdate("H:i:s", $duzina);
                    } else {
                        $time = gmdate("i:s", $duzina);
                    }
                ?>
                  <div class="col">
                    <div class="card position-relative">
                      <a href="https://bihlink.com/watch/?v=<?= $vidid; ?>"><img src="https://img.youtube.com/vi/<?= $vidid; ?>/mqdefault.jpg" alt="<?= $title; ?>" style="width:100%;" class="card-img-top"></a>
                      <span class="position-absolute top-0 end-0 px-1 bg-danger m-1"><?= $time; ?></span>
                      <div class="card-body">
                        <a href="https://bihlink.com/watch/?v=<?= $vidid; ?>" title="<?= $title; ?>">
                            <h6 class="box-post-title"><?= $title; ?></h6>
                        </a>
                        <p class="card-text"><i class="bi bi-person-circle smicon"></i> <a href="https://bihlink.com/channel/?id=<?= $channelId; ?>"><?= $channelTitle; ?></a></p>
                      </div>
                    </div>
                  </div>
                        <?php
                    }
                ?>
            </div>
        </div><!-- row 1 -->
    </div><!-- container -->
<?php include('inc/footer.php'); ?>
</body>
</html>
