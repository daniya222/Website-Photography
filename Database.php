<?php

class Database{
	
	private $host ="localhost";
	private $user ="root";
	private $password ="";
	private $dbname = "photodb";
	
	private $dbh;
	private $error;
	private $statement;
	
	public function __construct()
	{
		//set DSN
		$dsn = 'mysql:host='.$this->host. ';dbname'.$this->dbname;
		//set option
		$option = array(
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE	=> PDO::ERRMODE_EXCEPTION
		);
		//create new PDO
		try{
			$this->dbh = new PDO($dsn, $this->user, $this->password , $option);
		}
		catch(PDOException $e)
		{
			 echo 'ERROR!';
			 print_r( $e );
		}
	}
	public function query($query)
	{
		$this->statement = $this->dbh->prepare($query);
	}
	public function bind($param, $value, $type = null)
	{
		if(is_null($type))
		{
			switch(true)
			{
				case is_int($value);
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value);
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value);
					$type = PDO::PARAM_NULL;
					break;
					default;
					$type = PDO::PARAM_STR;
			}
		}
		$this->statement->bindValue($param, $value, $type);
		
	}
	
	public function execute()
	{
		return $this->statement->execute();
	}
	public function lastInsertId()
	{
		return $this->dbh->lastInsertId();
	}
	public function resultSet()
	{
		$this->execute();
		return $this->statement->fetchAll(PDO::FETCH_ASSOC);
	}
	public function single()
	{
		$this->execute();
		return $this->statement->fetch(PDO::FETCH_ASSOC);
	}
	
}