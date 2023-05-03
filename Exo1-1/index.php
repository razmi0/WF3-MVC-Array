<?php

include_once("view/view.php");
include_once("model/model.php");
include_once("controller/controller.php");



$p = session_start();
$_SESSION['user'] = "admin";
$_SESSION['pass'] = "admin";
// print_r($_SESSION['user']);
// print_r($_SESSION['pass']);


