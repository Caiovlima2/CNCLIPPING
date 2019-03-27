<?php

	include_once "../Actions/config.action.php";

	class Connection{

		public $con;

		function __construct(){

			try{

				$this->con = mysqli_connect(host, user, pass, db);
				mysqli_set_charset($this->con, "utf8");
					if(mysqli_connect_errno() != 0){

						throw new Exception(mysqli_connect_errno() . " - " . mysqli_connect_errno());

					}

			}catch(Exception $erro){
				echo "Erro ao conectar!";
				die($erro->getMessage());

			}
		}

		function __destruct(){

			if(mysqli_connect_errno() == 0)
				mysqli_close($this->con);
		}


	}

?>