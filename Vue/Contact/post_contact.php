<?php
$errors = array();

	if(array_key_exists('name', $_POST) || $_POST['name'] == ''){
		$errors['name'] = "Vous n'avez pas renseigné votre nom";
	}

	if(array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		$errors['email'] = "Vous n'avez pas renseigné un email valide";
	}
	if(array_key_exists('message', $_POST) || $_POST['message'] == ''){
		$errors['message'] = "Vous n'avez pas renseigné votre message";
	}

	session_start();
	
	if(!empty($errors)){
		$_SESSION['errors'] = $errors;
		$_SESSION['inputs'] = $_POST;
		header('Location: /blogtest/contact');
	}
	else
	{
			$_SESSION['success'] = 1;
			$message = $_POST['message'];
			$headers = 'FROM: site@local.dev';

		mail('francois681927@hotmail.fr', 'Formulaire de contact', $message, $headers);
		header('Location: /blogtest/contact');
	}