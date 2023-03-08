<?php 
require_once('../../inc/config.php'); 
$ctry = $_GET["c"];
$ctryname = $_GET["ct"];
$ip = $_SERVER['REMOTE_ADDR'];
$ipctcode = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip={$ip}"));
if($ctry == '') {
    $ctry = $ipctcode->geoplugin_countryCode;
    $ctryname = $ipctcode->geoplugin_countryName;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $seotitle; ?> - Trending Videos<?php echo " In $ctryname"; ?></title>
    <?php include('../../inc/inhead.php'); ?>
    <meta name="description" content="Watch latest trending videos on <?= $seotitle; ?>" />
	<meta name="image" content="<?= $rooturl; ?>/video/inc/img/bihlink.jpg">
	<!-- Schema.org Tags -->
	<meta itemprop="name" content="<?= $seotitle; ?> - Trending Videos<?php echo " In $ctryname"; ?>">
	<meta itemprop="description" content="Watch latest trending videos on <?= $seotitle; ?>">
	<meta itemprop="image" content="<?= $rooturl; ?>/video/img/bihlink.jpg">
	<!-- Opengraph Tags & Twitter Cards -->
	<meta property="og:title" content="<?= $seotitle; ?> - Trending Videos<?php echo " In $ctryname"; ?>">
	<meta property="og:description" content="Watch latest trending videos on <?= $seotitle; ?>">
	<meta property="og:image" content="<?= $rooturl; ?>/video/inc/img/bihlink.jpg">
	<meta property="og:url" content="<?= $rooturl; ?>/video/trending/">
	<meta property="og:site_name" content="<?= $seotitle; ?>">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="website">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@abidnev">
	<meta name="twitter:creator" content="@abidnev">
	<meta name="twitter:title" content="<?= $seotitle; ?> - Trending Videos<?php echo " In $ctryname"; ?>">
	<meta name="twitter:description" content="Watch latest trending videos on <?= $seotitle; ?>">
	<meta name="twitter:image" content="<?= $rooturl; ?>/video/inc/img/bihlink.jpg">
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-arrow-up-circle"></i></button>
<?php include('../../inc/navbar.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12"><h1><i class="bi bi-play-btn"></i> <?= $seotitle; ?> - Trending Videos<?php echo " In $ctryname"; ?></h1></div>
            
                <div class="accordion mt-3" id="accordionPanelsStayOpenExample">
                  <div class="accordion-item">
                    <h3 class="accordion-header" id="panelsStayOpen-headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                        <b>Choose Different Country</b>
                      </button>
                    </h3>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                      <div class="accordion-body">
                        <div class="row">
                          <div class="col-sm-3">
                            <div class="card">
                              <div class="card-body">
                                <a href="<?= $rooturl; ?>/video/trending/" class="btn btn-info mb-2 w-100 text-start">Bosnia and Herzegovina</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=hr&ct=Croatia" class="btn btn-info mb-2 w-100 text-start">Croatia</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=rs&ct=Serbia" class="btn btn-info mb-2 w-100 text-start">Serbia</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=me&ct=Montenegro" class="btn btn-info mb-2 w-100 text-start">Montenegro</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=mk&ct=Macedonia" class="btn btn-info mb-2 w-100 text-start">Macedonia</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=si&ct=Slovenia" class="btn btn-info mb-2 w-100 text-start">Slovenia</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=us&ct=USA" class="btn btn-info mb-2 w-100 text-start">USA</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=ca&ct=Canada" class="btn btn-info mb-2 w-100 text-start">Canada</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=au&ct=Australia" class="btn btn-info mb-2 w-100 text-start">Australia</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=gb&ct=United%20Kingdom" class="btn btn-info mb-2 w-100 text-start">United Kingdom</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=de&ct=Germany" class="btn btn-info mb-2 w-100 text-start">Germany</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=fr&ct=France" class="btn btn-info mb-2 w-100 text-start">France</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=it&ct=Italy" class="btn btn-info mb-2 w-100 text-start">Italy</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=dz&ct=Algeria" class="btn btn-info mb-2 w-100 text-start">Algeria</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=ar&ct=Argentina" class="btn btn-info mb-2 w-100 text-start">Argentina</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=at&ct=Austria" class="btn btn-info mb-2 w-100 text-start">Austria</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=az&ct=Azerbaijan" class="btn btn-info mb-2 w-100 text-start">Azerbaijan</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=bh&ct=Bahrain" class="btn btn-info mb-2 w-100 text-start">Bahrain</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=bd&ct=Bangladesh" class="btn btn-info mb-2 w-100 text-start">Bangladesh</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=by&ct=Belarus" class="btn btn-info mb-2 w-100 text-start">Belarus</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=be&ct=Belgium" class="btn btn-info mb-2 w-100 text-start">Belgium</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=bo&ct=Bolivia" class="btn btn-info mb-2 w-100 text-start">Bolivia</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=br&ct=Brazil" class="btn btn-info mb-2 w-100 text-start">Brazil</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=bg&ct=Bulgaria" class="btn btn-info mb-2 w-100 text-start">Bulgaria</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=cl&ct=Chile" class="btn btn-info mb-2 w-100 text-start">Chile</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=co&ct=Colombia" class="btn btn-info mb-2 w-100 text-start">Colombia</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=cr&ct=Costa%20Rica" class="btn btn-info mb-2 w-100 text-start">Costa Rica</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="card">
                              <div class="card-body">
                                <a href="<?= $rooturl; ?>/video/trending/?c=cy&ct=Cyprus" class="btn btn-info mb-2 w-100 text-start">Cyprus</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=cz&ct=Czechia" class="btn btn-info mb-2 w-100 text-start">Czechia</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=dk&ct=Denmark" class="btn btn-info mb-2 w-100 text-start">Denmark</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=do&ct=Dominican%20Republic" class="btn btn-info mb-2 w-100 text-start">Dominican Republic</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=ec&ct=Ecuador" class="btn btn-info mb-2 w-100 text-start">Ecuador</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=eg&ct=Egypt" class="btn btn-info mb-2 w-100 text-start">Egypt</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=sv&ct=El%20Salvador" class="btn btn-info mb-2 w-100 text-start">El Salvador</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=ee&ct=Estonia" class="btn btn-info mb-2 w-100 text-start">Estonia</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=fi&ct=Finland" class="btn btn-info mb-2 w-100 text-start">Finland</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=ge&ct=Georgia" class="btn btn-info mb-2 w-100 text-start">Georgia</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=gh&ct=Ghana" class="btn btn-info mb-2 w-100 text-start">Ghana</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=gr&ct=Greece" class="btn btn-info mb-2 w-100 text-start">Greece</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=gt&ct=Guatemala" class="btn btn-info mb-2 w-100 text-start">Guatemala</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=hn&ct=Honduras" class="btn btn-info mb-2 w-100 text-start">Honduras</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=hk&ct=Hong%20Kong" class="btn btn-info mb-2 w-100 text-start">Hong Kong</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=hu&ct=Hungary" class="btn btn-info mb-2 w-100 text-start">Hungary</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=is&ct=Iceland" class="btn btn-info mb-2 w-100 text-start">Iceland</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=in&ct=India" class="btn btn-info mb-2 w-100 text-start">India</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=id&ct=Indonesia" class="btn btn-info mb-2 w-100 text-start">Indonesia</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=iq&ct=Iraq" class="btn btn-info mb-2 w-100 text-start">Iraq</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=ie&ct=Ireland" class="btn btn-info mb-2 w-100 text-start">Ireland</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=il&ct=Israel" class="btn btn-info mb-2 w-100 text-start">Israel</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=jm&ct=Jamaica" class="btn btn-info mb-2 w-100 text-start">Jamaica</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=jp&ct=Japan" class="btn btn-info mb-2 w-100 text-start">Japan</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=jo&ct=Jordan" class="btn btn-info mb-2 w-100 text-start">Jordan</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=kz&ct=Kazakhstan" class="btn btn-info mb-2 w-100 text-start">Kazakhstan</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=ke&ct=Kenya" class="btn btn-info mb-2 w-100 text-start">Kenya</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="card">
                              <div class="card-body">
                                <a href="<?= $rooturl; ?>/video/video/trending/?c=kw&ct=Kuwait" class="btn btn-info mb-2 w-100 text-start">Kuwait</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=lv&ct=Latvia" class="btn btn-info mb-2 w-100 text-start">Latvia</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=lb&ct=Lebanon" class="btn btn-info mb-2 w-100 text-start">Lebanon</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=ly&ct=Libya" class="btn btn-info mb-2 w-100 text-start">Libya</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=li&ct=Liechtenstein" class="btn btn-info mb-2 w-100 text-start">Liechtenstein</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=lt&ct=Lithuania" class="btn btn-info mb-2 w-100 text-start">Lithuania</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=lu&ct=Luxembourg" class="btn btn-info mb-2 w-100 text-start">Luxembourg</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=my&ct=Malaysia" class="btn btn-info mb-2 w-100 text-start">Malaysia</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=mt&ct=Malta" class="btn btn-info mb-2 w-100 text-start">Malta</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=mx&ct=Mexico" class="btn btn-info mb-2 w-100 text-start">Mexico</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=ma&ct=Morocco" class="btn btn-info mb-2 w-100 text-start">Morocco</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=np&ct=Nepal" class="btn btn-info mb-2 w-100 text-start">Nepal</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=nl&ct=Netherlands" class="btn btn-info mb-2 w-100 text-start">Netherlands</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=nz&ct=New%20Zeland" class="btn btn-info mb-2 w-100 text-start">New Zeland</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=ni&ct=Nicaragua" class="btn btn-info mb-2 w-100 text-start">Nicaragua</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=ng&ct=Nigeria" class="btn btn-info mb-2 w-100 text-start">Nigeria</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=no&ct=Norway" class="btn btn-info mb-2 w-100 text-start">Norway</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=om&ct=Oman" class="btn btn-info mb-2 w-100 text-start">Oman</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=pk&ct=Pakistan" class="btn btn-info mb-2 w-100 text-start">Pakistan</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=pa&ct=Panama" class="btn btn-info mb-2 w-100 text-start">Panama</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=pg&ct=Papua%20New%20Guinea" class="btn btn-info mb-2 w-100 text-start">Papua New Guinea</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=py&ct=Paraguay" class="btn btn-info mb-2 w-100 text-start">Paraguay</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=pe&ct=Peru" class="btn btn-info mb-2 w-100 text-start">Peru</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=ph&ct=Philippines" class="btn btn-info mb-2 w-100 text-start">Philippines</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=pl&ct=Poland" class="btn btn-info mb-2 w-100 text-start">Poland</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=pt&ct=Portugal" class="btn btn-info mb-2 w-100 text-start">Portugal</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=pr&ct=Puerto%20Rico" class="btn btn-info mb-2 w-100 text-start">Puerto Rico</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="card">
                              <div class="card-body">
                                <a href="<?= $rooturl; ?>/video/trending/?c=qa&ct=Qatar" class="btn btn-info mb-2 w-100 text-start">Qatar</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=ro&ct=Romania" class="btn btn-info mb-2 w-100 text-start">Romania</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=ru&ct=Russia" class="btn btn-info mb-2 w-100 text-start">Russia</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=sa&ct=Saudi%20Arabia" class="btn btn-info mb-2 w-100 text-start">Saudi Arabia</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=sn&ct=Senegal" class="btn btn-info mb-2 w-100 text-start">Senegal</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=sg&ct=Singapore" class="btn btn-info mb-2 w-100 text-start">Singapore</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=sk&ct=Slovakia" class="btn btn-info mb-2 w-100 text-start">Slovakia</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=za&ct=South%20Africa" class="btn btn-info mb-2 w-100 text-start">South Africa</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=kr&ct=South%20Korea" class="btn btn-info mb-2 w-100 text-start">South Korea</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=es&ct=Spain" class="btn btn-info mb-2 w-100 text-start">Spain</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=lk&ct=Sri%20Lanka" class="btn btn-info mb-2 w-100 text-start">Sri Lanka</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=se&ct=Sweden" class="btn btn-info mb-2 w-100 text-start">Sweden</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=ch&ct=Switzerland" class="btn btn-info mb-2 w-100 text-start">Switzerland</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=tw&ct=Taiwan" class="btn btn-info mb-2 w-100 text-start">Taiwan</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=tz&ct=Tanzania" class="btn btn-info mb-2 w-100 text-start">Tanzania</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=th&ct=Thailand" class="btn btn-info mb-2 w-100 text-start">Thailand</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=tn&ct=Tunisia" class="btn btn-info mb-2 w-100 text-start">Tunisia</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=tr&ct=Turkey" class="btn btn-info mb-2 w-100 text-start">Turkey</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=ug&ct=Uganda" class="btn btn-info mb-2 w-100 text-start">Uganda</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=ua&ct=Ukraine" class="btn btn-info mb-2 w-100 text-start">Ukraine</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=ae&ct=United%20Arab%20Emirates" class="btn btn-info mb-2 w-100 text-start">United Arab Emirates</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=uy&ct=Uruguay" class="btn btn-info mb-2 w-100 text-start">Uruguay</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=ve&ct=Venezuela" class="btn btn-info mb-2 w-100 text-start">Venezuela</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=vn&ct=Vietnam" class="btn btn-info mb-2 w-100 text-start">Vietnam</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=ye&ct=Yemen" class="btn btn-info mb-2 w-100 text-start">Yemen</a>
                                <a href="<?= $rooturl; ?>/video/trending/?c=zw&ct=Zimbabwe" class="btn btn-info mb-2 w-100 text-start">Zimbabwe</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Accordion -->
                
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
                <?php
                $apidata = "https://invidious.snopyta.org/api/v1/trending/?region=$ctry&pretty=1";
                $api = file_get_contents($apidata);
                $arr = json_decode($api, true);
                function printValues($arr) {
                    global $count;
                    global $values;
                    // Check input is an array
                    if(!is_array($arr)){
                        die("ERROR: Input is not an array");
                    }
                    foreach($arr as $key=>$value){
                        if(is_array($value)){
                            printValues($value);
                        } else{
                            $values[] = $value;
                            $count++;
                        }
                    }
                }
                    foreach(array_slice($arr, 0, 48) as $data) {
                        $vidid = $data['videoId'];
                        $title = $data['title'];
                        $channelId = $data['authorId'];
                        $channelTitle = $data["author"];
                        $published = $data['publishedText'];
                        $views = $data['viewCount'];
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
                        <a href="https://bihlink.com/video/watch/?v=<?= $vidid; ?>" title="<?= $title; ?>">
                            <h6 class="box-post-title"><?= $title; ?></h6>
                        </a>
                        <p class="card-text"><i class="bi bi-person-circle smicon"></i> <a href="https://bihlink.com/video/channel/?id=<?= $channelId; ?>"><?= $channelTitle; ?></a></p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted"><i class="bi bi-alarm"></i> <?= $published; ?> <i class="bi bi-eye"></i> <?= $views; ?></small>
                      </div>
                    </div>
                  </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div><!-- container -->
<?php include('../../inc/footer.php'); ?>
</body>
</html>
