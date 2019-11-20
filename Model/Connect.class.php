<?php  

	class Connect{
		public static $instance;

		public function __construct(){

		}

		public static function get_instance(){
			if(!isset(self::$instance)){
				//Diz qual banco de dados vai se conectar
				$db = parse_url(getenv("postgres://ynpvaeudrjuuju:5d334a2bf1d4b4d1a15cbfee8bb17de75e565eb79290b621569788e75da3f17a@ec2-174-129-214-42.compute-1.amazonaws.com:5432/d24bjio0vnn90h"));
				self::$instance = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")), array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);		
			}
			return self::$instance;
		}
	}


?>