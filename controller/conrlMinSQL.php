<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'bl/model/validateSQL.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'bl/model/modelMinSQL.php';
	class contrlMinSQL extends modelMinSQL {
				
		public function tblCreate($name = 'webproger2014'){
			$this -> sql  = validateSQL::setValidSQL($this -> sql);//Проверка не пустой ли sql
			$this -> sql  = validateSQL::delSymb($this -> sql);//Удаляем лишнюю запятую в запросе
			$name  = validateSQL::setToString($name);
			$this -> crTbl($name); // Подготовка запроса;
			$this -> shiSQL(); // Отправка запроса
		}
	  
	   //удаление бд
	   public function dropDB($bd = '') {
		   $this -> drBD($bd); //Подготовка запроса
		   $this -> shiSQL(); //Отправка запроса	   
	   }
	   
	   //Удаление таблицы
	   public function dropTbl($tbl = '') {
		    $this -> drTbl($tbl); //Подготовка запроса
			$this -> shiSQL(); //Отправка запроса	   
	   }		
	}
    
	$minSQL = new contrlMinSQL();
	$minSQL -> idAuto('pavl');
	$minSQL -> tblCreate('administration');
?>