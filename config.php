<?php
//$db_name = "burnmarks356_websiteInfo"; for testing only
$db_name = "jonah850_websiteinfo";
//$db_user = "burnmarks356"; for testing only
$db_user = "jonah850";
//$db_pass = "ZyyANee\$DVWqYw"; for testing only
$db_pass = "98b03xwn2p";
$db_host = "localhost";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die('Could not connect: '.$db_name.': ');
}


?>