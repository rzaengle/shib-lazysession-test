<?php
session_start();
$_SESSION['LOCALAUTHNAME'] = null;
header('Location: https://myubcard.com/shibtest');