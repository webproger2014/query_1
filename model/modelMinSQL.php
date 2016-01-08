<?php

	require_once $_SERVER['DOCUMENT_ROOT'].'bl/model/querySQL.php';
    class modelMinSql extends querySQL {
	    protected $sql = '',		
		          $paramType = '';
				  
		//Отправляет запрос sql при не удаче возвращает ошибку
		protected function shiSQL($name = 'webproger2014') {
			$name  = validateSQL::setToString($name);
	        $this -> showError($this -> crTbl($name));//отправка запроса 
		}
		
		//Запрос на автоматизированную нумерации ячейки
		public function idAuto($id = 'id', $lng = 255){
			$id  = validateSQL::setToString($id);
			$lng = validateSQL::setToBytes($lng);
			$this -> sql .= " {$id} INT({$lng}) NOT NULL AUTO_INCREMENT, PRIMARY KEY({$id}),";
		}
		
		//Создаёт ячейку с типом INT NOT NULL
		public function ntlInt($id = 'id', $lng = 255) {
			$id  = validateSQL::setToString($id);
			$lng = validateSQL::setToBytes($lng);
            $this -> sql .= " {$id} INT({$lng}) NOT NULL,";			
		}

		//Создаёт ячейку с типом INT  NULL
		public function nlInt($id = 'id', $lng = 255) {
			$id  = validateSQL::setToString($id);
			$lng = validateSQL::setToBytes($lng);
            $this -> sql .= " {$id} INT({$lng}) NULL,";			
		}				
		
				
		protected function noneSQL() {
			$this -> sql = '';
		}
		
	   protected function showError($query) {
		   if ($query !== true) {
			   exit($this -> mysqli -> error);
		   }
	   }
	   
	   public function rHost() {
		   $this -> host = $this -> reHost;
	   }
	   
	   public function rLogin() {
		   $this -> login = $this -> reLogin;
	   }
	   
	   public function rPsw() {
		   $thit -> psw = $this -> rePsw;
	   }
	   
	   public function rBd() {
		   $this -> bd = $this -> reBd;
	   }
	   
	   public function rConnect() {
		   $this -> host  = $this -> reHost;
		   $this -> login = $this -> reLogin;
		   $this -> psw   = $this -> rePsw;
		   $this -> bd    = $this -> reBd;
	   }	   
	}
?>