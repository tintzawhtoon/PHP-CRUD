<?php 

include("../vendor/autoload.php");
use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\Auth;
use Helpers\HTTP;


$auth = Auth::check();
$table = new UsersTable(new MySQL);

$error = $_FILES['photo']['error'];
$type = $_FILES['photo']['type'];
$tmp = $_FILES['photo']['tmp_name'];
$name = $_FILES['photo']['name'];

if($error) {
   HTTP::redirect('/index.php', "error=file");
}


if($type === 'image/jpeg' || $type === 'image/png') {
    $table->updatePhoto($auth->id, $name);
    move_uploaded_file($tmp, "photos/$name");
    $auth->photo = $name;
    HTTP::redirect('/profile.php');
} else {
    HTTP::redirect('/profile.php', "error=type");
}