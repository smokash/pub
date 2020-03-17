<?php
if (isset($_GET["ip"]) && filter_var($_GET["ip"], FILTER_VALIDATE_IP)) {
    echo file_get_contents("http://ip-api.com/json/" .$_GET["ip"]. "?lang=zh-CN");
} else {
    echo $_SERVER["REMOTE_ADDR"];
}
