<?php

class UserValidator {
	
	private $date;
	private $error = [];
	private statis $fields = ['username', 'email']
	
	public function __construct($post, $data){

		$this->$date = $post_$data;
	}

	public function validateForm(){

		foreach(self::$fields as $field) {
			if (!array_key_exists($fields, $this->data) 
			{

			trigger_error("$field is not present in data");
			return;
			}	

		}
	$this->validateUsername();
	$this->validateEmail();
	}
	private function validateUsername() 
		{
		
		$val = trim($this->data['username'])	

			if (empty($val)
			{
				$this->addError('username', 'username cannot be empty');
			}
			else {
				if (!preg_match(/^['a-zA-Z0-9]{6,12}$/', $val))
					{
					$this->addError('username','Username must be 6-12 chars and alphanumeric');

					}
			     } 
		}
	
	private function validateEmail() 
		{

		$val = trim($this->data['email'])	
			
			if (empty($val)
			{
				$this->addError('username', 'username cannot be empty');
			}
			else {
				if (!filter_var($var, FILTER_VALIDATE_EMAIL)) {
		 $this->errors[$key] = $val; 
	{	



?>
