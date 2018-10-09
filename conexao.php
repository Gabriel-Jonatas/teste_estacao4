<?php

class db {

	private $host = 'localhost';
	private $usuario = 'root';
	private $senha = '';
	private $database = 'teste_estacao4';

	public function conecta_db() {
		$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
		mysqli_set_charset($con, 'utd-8');

		return $con;
	}

}

?>