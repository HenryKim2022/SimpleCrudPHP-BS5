<?php
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$Curr_Url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$Base_Url = $protocol . $_SERVER['HTTP_HOST'];

$Site_Build = "2023";
$Curr_Year = date("Y");
$Site_Title = "Hendri | 1152125001";
$Site_Subtitle_Footer = "Hendri (1152125001)";
$Site_Name = "UAS PBW";
$Site_Purpose = "User Registration MYSQL";
// $Site_Purpose = "";
$Site_Logo = "img/Logo.jpg";
$Institut_Name = "Institut Teknologi Indonesia";
