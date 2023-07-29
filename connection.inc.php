<?php

session_start();
# mysqli_connect(localhost,user,password,name)
$con=@mysqli_connect("localhost","id21041904_connect","Connect@123","id21041904_connectapp");
if (!$con) {
    $err_no=mysqli_connect_errno();
    echo "ERROR:$err_no, Failed to connect to Database, Try agin after sometime.";
    exit();
}
?>
<?php
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
define('BLOG_IMAGE_SERVER_PATH',SERVER_PATH.'assets/img/blog/');
define('IMAGE_SERVER_PATH',SERVER_PATH.'img/');
define('SITE_PATH','https://friendforyou.000webhostapp.com/');
define('BLOG_IMAGE_SITE_PATH',SITE_PATH.'assets/img/blog/');

function secure_value($con,$str){
    if($str != ''){
        $str=trim($str);
        return mysqli_real_escape_string($con,$str);
    }
}
function slugify($text) {
  // replace non letter or digits by -
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);
  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);
  // trim
  $text = trim($text, '-');
  // lowercase
  $text = strtolower($text);
  return $text;
}

?>