<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'bl/model/validateSQL.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'bl/model/modelMinSQL.php';
	class contrlMinSQL extends modelMinSQL {
		
		//Создание базы данных
		public function createBD($name = 'webproger2014') {
			$name  = validateSQL::setToString($name); //Проверка аргумента
			$this -> bd = '';
			$this -> crBD($name);
			$this -> shiSQL();
			$this -> rBd();
		}	
		
		//Создание таблицы
		public function tblCreate($name = 'webproger2014'){
			$name  = validateSQL::setToString($name); //Проверка аргумента
			$this -> sql  = validateSQL::setValidSQL($this -> sql);//Проверка не пустой ли sql
			$this -> sql  = validateSQL::delSymb($this -> sql);//Удаляем лишнюю запятую в запросе
			$this -> crTbl($name); // Подготовка запроса;
			$this -> shiSQL(); // Отправка запроса
		}
	  
	   //удаление бд
	   public function dropDB($bd = '') {
		   $bd  = validateSQL::setToString($bd); //Проверка аргумента
		   $this -> drDB($bd); //Подготовка запроса
		   $this -> shiSQL(); //Отправка запроса	   
	   }
	   
	   //Удаление таблицы
	   public function dropTbl($tbl = '') {
		    $tbl  = validateSQL::setToString($tbl); //Проверка аргумента
		    $this -> drTbl($tbl); //Подготовка запроса
			$this -> shiSQL(); //Отправка запроса	   
	   }		
	}
    
	$minSQL = new contrlMinSQL();
	$minSQL -> createBD('sups');
	$minSQL -> bd = 'sups';
    //$minSQL -> nlInt('privet');
    //$minSQL -> ntlVar('login', 50, 55);
   // $minSQL -> ntlVar('emal', 50, 55);
 //   $minSQL -> ntlVar('psw', 50, 5);
   //  $minSQL -> nlText('comments');
     $minSQL -> tblCreate('userInfo5');
?>