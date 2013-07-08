<?php
    $version = phpversion();
    $ip = $_SERVER["SERVER_ADDR"];
    $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    $temp = sys_get_temp_dir();
?>
