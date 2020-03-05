<?php 
session_start();


$db = new PDO('mysql:host=127.0.0.1;dbname=users', 'root', '');

$id = ""; $firstname = ""; $lastname = ""; $email    = ""; $role = ""; $errors   = array(); 












