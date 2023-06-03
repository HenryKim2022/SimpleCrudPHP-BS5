<?php
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$Curr_Url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$Base_Url = $protocol . $_SERVER['HTTP_HOST'];
