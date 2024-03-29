<?php
declare(strict_types=1);
define("DD", realpath("../"));

require DD . "/wpa32/function.php";
require DD . "/app/controller/controllers.php";

$default_lang = _config_get("app.lang");
$error = _lang_get("settings.view_not_found");

if(!isset($_GET['page'])) {
    $page = "home";
} else {
    $page = $_GET['page'];
}
$controller = "_" . ucfirst($page) . "Controller";
if(function_exists($controller)) {
    call_user_func($controller);
} else {
    echo "404 Idiot!";
}
?>