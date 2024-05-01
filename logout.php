<?php
require_once("config.php");
session_start();

$_SESSION = [];
header("Location: {$ROOT_DIRECTORY}/guest.php");