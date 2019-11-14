<?php
	class Manager extends Connect{
		public function operation($query){ //Realiza uma operação no banco de dados(CREATE, UPDATE, DELETE)
			//echo $query;

			$con = parent::get_instance();
			$statement = $con->prepare($query);
			$statement->execute();
		}
		public function select($query){ //Feito para realizar consultas, diferente da função anterior, esta tem um retorno
			$con = parent::get_instance();
			$statement = $con->prepare($query);
			$statement->execute();
			$data;
			if($statement->rowCount()){
				while($result = $statement->fetch(PDO::FETCH_ASSOC)){
					//echo 'Pegando os bagulhete aq<br>';
					$data[] = $result;
				}
			}else{
				return false;
			}
			return $data;
		}
	}
?>