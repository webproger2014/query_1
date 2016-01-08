<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'bl/model/connectDB.php';
    class querySQL extends connectDB {
		protected function crTbl($name) {
			$this -> mysqli -> query("CREATE TABLE {$name}({$this -> sql});");
		}

		//Данные будут отправлены в кодировке UTF8
		protected function setUtf8() {
			$this -> mysqli -> query("SET NAMES 'utf8'");
		}

        protected function drBD($bd) {
			$this -> mysqli -> query("DROP DATABASE {$bd};");
		}

        protected function drTbl($tbl) {
			 $this -> mysqli -> query("DROP TABLE {$tbl};");
		}		
	}
?>