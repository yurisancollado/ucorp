<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {
	private $_id;
	const ERROR_DISABLED = 69;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate() {
		$usuario = new SoapClient('http://localhost/webservice/index.php?r=usuario/quote');
		if ($usuario -> getExisteUsuario($this -> username) == 0)
			$this -> errorCode = self::ERROR_USERNAME_INVALID;
		else if ($usuario -> getValidarUsuario($this -> username, $this -> password)== -1)
			$this -> errorCode = self::ERROR_PASSWORD_INVALID;
		else {
			$this -> _id = $usuario -> getValidarUsuario($this -> username, $this -> password);
			$this -> username = $this -> username;
			$this -> errorCode = self::ERROR_NONE;
			$this -> setState('tipoUsuario', $usuario -> getTipoUsuario($this -> username));
		}
		return $this -> errorCode == self::ERROR_NONE;
	}

}
