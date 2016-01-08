<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'bl/model/validateSQL.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'bl/model/modelMinSQL.php';
	class contrlMinSQL extends modelMinSQL {
				
		public function tblCreate($name = 'webproger2014'){
			$this -> createObjectMysqli();
			$this -> setUtf8();//Отправка кодировки
			$this -> sql  = validateSQL::setValidSQL($this -> sql);//Проверка не пустой ли sql
			$this -> sql  = validateSQL::delSymb($this -> sql);//Удаляем лишнюю запятую в запросе
			$this -> shiSQL($name); //Отправка запроса
			$this -> closeMysqli();// Закрытие мускула
			$this -> noneSQL(); //Отчищаем запрос
		}
		
	   //удаление бд
	   public function dropDB($bd = '') {
	       $this -> createObjectMysqli();
		   $this -> showError($this -> drBD($bd)); //Отправка запроса с возвратом ошибки
           $this -> closeMysqli();// Закрытие мускула		   
	   }
	   
	   //Удаление таблицы
	   public function dropTbl($tbl = '') {
	       $this -> createObjectMysqli();
		   $this -> showError($this -> drTbl($tbl)); //Отправка запроса с возвратом ошибки
           $this -> closeMysqli();// Закрытие мускула		   
	   }		
	}
    
	$minSQL = new contrlMinSQL();
	$minSQL -> idAuto('pavlik');
	$minSQL -> tblCreate('pavluhas');
?>