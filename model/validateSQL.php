<?php
 
    class validateSQL {
		
		//Функция удаляет запятую в конце запроса
	    public static function delSymb($sql) {
			$sql    = rtrim($sql);
			$length = strlen($sql) - 1;
			$sql[$length] = str_replace(',', '', $sql);
			return $sql;
		}
		
		public static function setValidSQL($sql) {
		    if ($sql == '') {
				$sql = 'id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),';
			} 		
            return $sql;			
		}
		
		//По алгоритму всё ясно
		public static function setToBytes($int){
			if (!is_int($int)) {
				$int = 255;
			} elseif (is_int($int) && $int > 255 && $int < 1) {
				$int = 255;
			}
			return $int;
		}
		
		public static function setToString($str){
			if (!is_string($str)) {
				$str = 'id';
		    } elseif (is_string($str) && $str == '') {
				$str = 'id';
			}
			return $str;
	    }
	}
?>