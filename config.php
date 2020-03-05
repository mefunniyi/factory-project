<?php 
session_start();

// Establish a connection
$db = new PDO("mysql:host=localhost;dbname=users", "root", "");

$id = ""; $firstname = ""; $lastname = ""; $email    = ""; $role = ""; $errors   = array(); 












