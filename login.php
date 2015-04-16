<?php
session_start();
$name = $_POST['name'];
$_SESSION['LOCALAUTHNAME'] = $name;
header('Location: https://myubcard.com/shibtest/');