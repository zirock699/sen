<?php
class db {

	private static $_instance =null;
	private $_pdo,
			$_query,
			$_error=false, 
			$_results,
			$_count=0;



			private function __construct (){
				try {
					
					$first='mysql:host='.config::get('mysql/host').';dbname='.config::get('mysql/db');
					$second=config::get('mysql/username');
					$third=config::get('mysql/password');
					$this->_pdo= new PDO($first,$second,$third);
					


				}catch (PDOExeption $e){
					die($e->getMessage());
				}

			}
			public static function getInstance(){
				if (!isset(self::$_instance)){
					self::$_instance=new db();

				}
				return self::$_instance;
			}
			public function query($sql,$params=array()){
				$this->_error=false;
				if($this->_query=$this->_pdo->prepare($sql)) {
					$x=1; 
					
					if (count($params)) {
						foreach ($params as $param) {
						$this->_query->bindValue($x, $param);
						$x++; 
					}
					} 
					if ($this->_query->execute())
						{
						
						$this->_results=$this->_query->fetchAll(PDO::FETCH_OBJ);
						$this->_count=$this->_query->rowCount();
						
						
						}
						else
						{
						
						$this->_error=true;   
						}
				}
					return $this;
			}
			public function action($action,$table,$where=array()){
					if (count($where)===3){
						$operators = array ('=','>','<','>=','<=');
						$field=		$where[0];
						$operator = $where [1];
						$value= 	$where[2];
						if (in_array($operator, $operators)){
							$sql= "{$action} FROM {$table} WHERE {$field} {$operator}?";
							if (!$this->query($sql,array($value)))
								{
								 return $this;
								}
						}
					}
					return false;
				}
			public function get($table, $where)
				{
					
					return $this->action ('SELECT *',$table, $where);

				}
			public function delete($table, $where)
				{
					return $this->action ('DELETE *',$table,$where);

				}

			public function insert ($table,$fields =array()){
				if (count($fields)){
					$keys=array_keys($fields);
					$values =null;
					$x=1;
					foreach ($fields as $field ) {
						$values .= "?";
						if ($x<count($fields)){
							$values .=',';

						}
						$x++;
					}
					$sql ="INSERT INTO user(`".implode('`,`', $keys)."`) VALUES ({$values})"; 
					
					$noError=!$this->query($sql,$fields)->error();
					if ($noError){
						return true;
						echo "insterted";
					}else
					{
						echo "something went wrong";
					}

				}
			return	false;			
			}
			public function update($table,$id,$fields =array()){
				$set='';
				$x=1;
				foreach ($fields as $name => $value) {
					$set.= "{$name}=?";
					if ($x<count($fields)){
							$set .=',';

				} $x++;
			}
				
				$sql="UPDATE {$table} SET {$set} WHERE id='{$id}'";
				
				$noError=!$this->query($sql,$fields)->error();
					if ($noError){
						echo "updated";
						return true;
						
					}else
					{
						echo "something went wrong";
					}
			return	false;

			} 
			

		


			public function results(){
					
					return $this->_results;
				}
				public function first (){

					return $this->results()[0];

				}
			public function error ()
				{
					return $this->_error;
				}
			public function count()
				{
					
					return $this->_count;
				}
}
