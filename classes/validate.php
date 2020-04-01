<?php

class validate {

	private $_passed=false,
			$_error=array(),
			$_db=null;

	public function __construct (){

		$this->_db=db::getInstance();

	}		
	public function check($source,$items = array()){

		foreach ($items as $item => $rules) {
			foreach ($rules as $rule => $rule_value) {
				$value=trim($source[$item]);
				if ($rule==='required'&& empty($value)){
					$this->addError("{$item} is required");

				}else if (!empty($value)){  
					switch ($rule) {
						case 'min':
							if (strlen($value)<$rule_value){
								$this->addError("{$item} most be a minimum of {$rule_value} charachters ");
							}
							
							break;
						case 'max':
							if (strlen($value)>$rule_value){
								$this->addError("{$item} most be a maximum of {$rule_value} charachters ");}
							# code...
							break;
						case 'matches':
							if ($value!=$source[$rule_value]){
								$this->addError("{$rule_value}  most match {$item}");
								

							}
							# code...
							break;
						case 'unique':
							$check=$this->_db;
							$check->get($rule_value,array($item,'=',$value));
							if($check->count()){
								$this->addError("{$item} already exists.");
							}
							
							break;			
						
						default:
							# code...
							break;
					}

				}
			}
		}
		if (empty($this->_errors)){
			$this->_passed=true;

		}
		return $this;

		
	}
	private function addError ($error){
			
			array_push($this->_error,$error);
			return $this->_error;
		}
	public function errors (){

		
		return $this->_error;
	}	
	public function passed(){
		return $this->_passed;
	}

}