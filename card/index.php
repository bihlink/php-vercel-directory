<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
$view = $_GET['view'];
if ($view == "") {
    $view = "62d85e33be998";
}
$contents = file_get_contents('https://fedicard.bihlink.com/data/cardsdata.json');
$json = json_decode($contents, true);
$card = array_search($view, array_column( $json, 'cid' ) );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php if($json[$card]["name"] != "") {echo $json[$card]["name"];} else { echo "FediCard"; } ?></title>
    <meta name="description" content="<?php echo $json[$card]["description"]; ?>" />
    <meta name="image" content="<?php echo $json[$card]["cardimg"]; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <base target="_blank">
</head>
<body>
    <div class="container shadow pt-3 mb-3" style="max-width:800px;">
        <?php if ($json[$card]["approved"] == "false") {
            echo '<div class="alert alert-danger mb-3" role="alert">This Fedi Card is not approved for public view!</div>';
        } else {
            if ($json[$card]["type"] == "misskey") {
                echo file_get_contents("https://maplefeed.bihlink.com/apiv2/feed?userurl=".$json[$card]["instanceurl"]."&theme=modern-light-min&size=100&header=true&replies==".$json[$card]["replies"]."&boosts=".$json[$card]["boosts"]."");
            } else {
                echo file_get_contents("https://maplefeed.bihlink.com/apiv2/feed?userurl=".$json[$card]["instanceurl"]."&theme=modern-light-min&size=100&header=true&replies=".$json[$card]["replies"]."&boosts=".$json[$card]["boosts"]."");
            }
        }
        ?>
    </div><!-- container -->
    <footer class="bg-light text-center text-lg-start">
      <!-- Copyright -->
      <div class="text-center p-1" style="background-color: rgba(0, 0, 0, 0.2);">
        Created By
        <a class="text-dark" href="https://fedir.vercel.app/">Fediverse Directory</a> & Powered By <a class="text-dark" href="https://maplefeed.bihlink.com/">MaPleFeed</a> Admin: <a class="text-dark" href="https://abid.cc/abid">abid@abid.cc</a>
      </div>
      <!-- Copyright -->
    </footer>
</body>
</html>
