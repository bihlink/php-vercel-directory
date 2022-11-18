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
	<style>
	.avatar {
	  width: 80px;
	  background-color: #dc3545;
	}
	.rounded-circle {
	  border-radius: 50% !important;
	}
	.shadow {
	  box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important;
	}
	.header-left {
	  position: absolute;
	  top: 100px;
	  left: 12px;
	}
	</style>
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-arrow-up-circle"></i></button>
<?php include('inc/navbar.php'); ?>
    <div class="container">

                <div class="row">
                    <div class="col-12"><h2><i class="bi bi-play-btn"></i> <?= $seotitle; ?></h2></div>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
                        <?php
                        $apidata = "https://fedicard.bihlink.com/data/cardsdata.json";
                        $api = file_get_contents($apidata);
                        $arr = json_decode($api, true);
        
                        foreach(array_slice($arr, 0, 40) as $data) {
                        $name = $data['name'];
                        $username = $data['username'];
                        $avatar = $data['avatar'];
                        $cardimg = $data['cardimg'];
                        $description = $data["description"];
                        $description = $data["description"];
                        $type = $data["type"];
                        $instanceurl = $data["instanceurl"];
                        $replies = $data["replies"];
                        $boosts = $data["boosts"];
                        $indirectory = $data["indirectory"];
                        $approved = $data["approved"];
                        $featured = $data["featured"];
                        $cid = $data["cid"];
                        ?>
                          <div class="col">
                            <div class="card position-relative">
                              <img src="<?= $cardimg; ?>" style="width:100%;max-height:150px;" class="card-img-top">
                              <div class="card-body">
				<img class="avatar rounded-circle shadow header-left" src="<?= $avatar; ?>">
                                <h5 class="box-post-title"  style="margin-left:84px;margin-top:8px;"><?= $name; ?></h5>
                                <p class="card-text"><a href="<?= $rooturl; ?>/card/?view=<?= $cid; ?>" target="_blank">@<?= $username; ?>@<?= $instanceurl; ?></a></p>
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
