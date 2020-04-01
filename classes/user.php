<?php 
class user {
	private $_db;

	public function __construct ($user=null){
		$this->_db=db::getInstance();

	}
	public function create($fields=array()){
		if ($this->_db->insert('users','fields')){
			throw new Exception("there was a problem creatiing an account");
			
		}
	}
}