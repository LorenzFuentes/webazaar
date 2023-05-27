<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/webazaar/resource/php/class/core/init.php';

$user = new User();
$id = $user->data()->id;
echo $id;
 ?>
