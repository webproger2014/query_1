<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'bl/model/connectDB.php';
    class querySQL extends connectDB {
		protected function crTbl($name) {
			$this -> sql = "CREATE TABLE {$name}({$this -> sql});";
		}

		//Данные будут отправлены в кодировке UTF8
		protected function setUtf8() {
			$this -> mysqli -> query("SET NAMES 'utf8'");
		}
        
		protected function crBD($bd) {
			$this -> sql = "CREATE DATABASE {$bd};";
		}
		
        protected function drDB($bd) {
			$this -> sql = "DROP DATABASE {$bd};";
		}

        protected function drTbl($tbl) {
			 $this -> sql = "DROP TABLE {$tbl};";
		}		
	}
?>