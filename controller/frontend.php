<?php

//require_once('model.php');

function loginForm()
{
	require_once('view/frontend/loginFormView.php');
}

function login($username, $password)
{
	require_once('model/connectUser.php');

 	//password_hash($password, PASSWORD_DEFAULT);

	$user = connectUser($username, $password);

	if ($user) {
		$user_id = $user->get_id();
		$user_username = $user->get_username();
	}

	if (isset($user_id) && isset($user_username)) {
		$_SESSION['id'] = $user_id;
		$_SESSION['username'] = $user_username;

		header('Location: index.php?action=listProducts');
	}

	else {
		header('Location: index.php?action=login&auth=error');
	}

}

function listProducts() {
	require_once('view/frontend/listProductsView.php');
}

function checkSession() {
	if(isset($_SESSION['id']) && $_SESSION['username']) {
		return True;
	}
	else {
		return False;
	}
}

function destroySession() {
	session_destroy();
}
