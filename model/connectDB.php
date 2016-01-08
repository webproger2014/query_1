<?php
    class connectDB {
		public $mysqli,
		       $reHost  = 'localhost',
			   $reLogin = 'root',
			   $rePsw   = '',
			   $reBd    = 'testim',
		       $host    = 'localhost',
			   $login   = 'root',
			   $psw     = '',
			   $bd      = 'testim';

		//Возвращает объект mysqli - подключает к бд
		public function createObjectMysqli() { 
			       $this -> mysqli = new mysqli($this -> host, $this -> login, $this -> psw, $this -> bd);
			       if ($this -> mysqli -> connect_error) {
				       exit($this -> mysqli -> connect_errno);
			        } 
					
		       }
 
		public function closeMysqli() {
		    $this -> mysqli -> close();
	    }
	}
?>