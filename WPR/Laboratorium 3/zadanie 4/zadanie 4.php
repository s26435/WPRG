<?php
$allowed_ips = file('allowed_ip.txt', FILE_IGNORE_NEW_LINES);
$user_ip = $_SERVER['REMOTE_ADDR'];
if (in_array($user_ip, $allowed_ips)) {
    include 'allowed.html';
} else {
    include 'default.html';
}

