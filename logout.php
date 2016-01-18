<?php
/**
 * @author evgeniy.zarechenskiy
 * @email misterjaaay@gmail.com
 *
 * Getting logout Method
 * @see class/User.php
 */
require_once 'class/User.php';

$newLogout = new User;
$newLogout = $newLogout->logoutUser();



