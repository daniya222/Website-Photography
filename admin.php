<?php

class AdminModel extends Database
{
	protected $adminId;
	protected $adminName;
	protected $username;
	protected $password;
	
	
	public function register($adminName,$username,$password)
	{
		
		
		$this->query('INSERT INTO photodb.admin(adminName,username,password) VALUES (:adminName,:username,:password)');	
		$this->bind(':adminName',$adminName);
		$this->bind(':username',$username);
		$this->bind(':password',$password);
		$this->execute();
			
		if($this->lastInsertId())
		{
			header('Location: '.ROOT_URL.'loginAdmin.php');
		}
		
			
		
	}
}
