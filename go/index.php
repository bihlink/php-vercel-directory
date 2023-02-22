<?php
 $url=$_GET["url"];
 
 // kreiranje kratkog URLa
 //$short_url=substr(md5($url.mt_rand()),0,8);
 //echo "Your New URL Is : http://xyz.com/url.php?u=".$short_url."";
 
 //za redirekciju solucija
 echo '<script type="text/javascript">window.location = "'.$url.'"</script>';
