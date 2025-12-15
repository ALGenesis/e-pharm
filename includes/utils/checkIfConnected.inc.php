<?php

require_once "../includes/config/config.inc.php";

if(!isset($_SESSION['user_id'])) {
    header("Location: ../../pages/auth/index.php");
    exit();
}