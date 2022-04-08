<?php

date_default_timezone_set('America/Sao_Paulo');

abstract class  Conn {

     const host = 'localhost';
     const user = 'root';
     const  dbname = 'project';
     const password = '';

     static function conectar()
      {
            try
            {
             $pdo = new PDO("mysql:host=".self::host.";dbname=".self::dbname.";charset=utf8", self::user, self::password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		} catch(PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		}
            }
      }
