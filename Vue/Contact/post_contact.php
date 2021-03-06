<?php
require 'class/Form.php';
require 'class/Validator.php';
$errors = [];


$validator = new Validator($_POST);
$validator->check('name', 'required');
$validator->check('email', 'required');
$validator->check('email', 'email');
$validator->check('message', 'required');
$errors = $validator->errors();

session_start();

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: ../?controleur=contact');
} else {
    $_SESSION['success'] = 1;
    $headers = 'FROM: ' . $_POST['email'];
    mail('frey.francois68@gmail.com', 'Formulaire de contact de ' . $_POST['name'], $_POST['message'], $headers);
    header('Location: ../?controleur=contact');
}