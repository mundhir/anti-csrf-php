<?php
session_start();
class xcsrf
{
	public function generate_token(){
		if (function_exists('mcrypt_create_iv')) {
			$_SESSION['token'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
			return $_SESSION['token'];
		} else {
			$_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
			return $_SESSION['token'];
		}
	}
	
	public function validateToken($token){
		if (hash_equals($token,$_SESSION['token'])) {
			return true;
		} else {
			return false;
		}
	}
}