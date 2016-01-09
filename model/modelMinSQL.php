<?php

	require_once $_SERVER['DOCUMENT_ROOT'].'bl/model/querySQL.php';
    class modelMinSql extends querySQL {
	    protected $sql = '',		
		          $paramType = '';
		
        //Отправка запроса		
        protected function shiSQL() {
		   $this -> createObjectMysqli();
		   $this -> setUtf8();//Отправка кодировки
		   $this -> showError();
		   $this -> closeMysqli();
		   $this -> noneSQL();
	   }	
         
        ///////////////////////////////////
        //_____________INT________________ 		
	
		//Запрос на автоматизированную нумерации ячейки
		public function idAuto($id = 'id', $lng = 255){
			$id   = validateSQL::setToString($id);
			$lng  = validateSQL::setToBytes($lng);
			$this -> sql .= " {$id} INT({$lng}) NOT NULL AUTO_INCREMENT , PRIMARY KEY({$id}),";
		}
		
		//Создаёт ячейку с типом INT NOT NULL
		public function ntlInt($id = 'id', $lng = 255) {
			$id   = validateSQL::setToString($id);
			$lng  = validateSQL::setToBytes($lng);
            $this -> sql .= " {$id} INT({$lng}) NOT NULL,";			
		}

		//Создаёт ячейку с типом INT  NULL
		public function nlInt($id = 'id', $lng = 255) {
			$id   = validateSQL::setToString($id);
			$lng  = validateSQL::setToBytes($lng);
            $this -> sql .= " {$id} INT({$lng}),";			
		}				
		 
		//_____________INT_________________ 
		///////////////////////////////////
		

        //////////////////////////////////
        //___________VARCHAR_____________ 
         
		public function nlVar($name = 'id', $lng = 255, $code = 'utf8_general_ci') {
			$name = validateSQL::setToString($name);
			$lng  = validateSQL::setToBytes($lng);
			$code = validateSQL::setToCodeUtf8($code);
            $this -> sql .= " {$name} VARCHAR({$lng}) NULL COLLATE {$code},";			
		}		 

		public function ntlVar($name = 'id', $lng = 255, $code = 'utf8_general_ci') {
			$name = validateSQL::setToString($name);
			$lng  = validateSQL::setToBytes($lng);
			$code = validateSQL::setToCodeUtf8($code);
            $this -> sql .= " {$name} VARCHAR({$lng}) NOT NULL COLLATE {$code},";			
		}		
		
		//___________VARCHAR______________ 
        //////////////////////////////////
	


        //////////////////////////////////
        //________________TEXT 
         
		public function nlText($name = 'id',  $code = 'utf8_general_ci') {
			$name = validateSQL::setToString($name);
			$code = validateSQL::setToCodeUtf8($code);
            $this -> sql .= " {$name} TEXT NULL COLLATE {$code},";			
		}		 

		public function ntlText($name = 'id', $code = 'utf8_general_ci') {
			$name = validateSQL::setToString($name);
			$code = validateSQL::setToCodeUtf8($code);
            $this -> sql .= " {$name} TEXT NOT NULL COLLATE {$code},";			
		}		
		
		//______________TEXT______________ 
        //////////////////////////////////


	protected function noneSQL() {
			$this -> sql = '';
		}
		
	   protected function showError() {
		   if ($this -> mysqli -> query($this -> sql) !== true) {
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