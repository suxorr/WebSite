<?php
abstract class Model{
	protected $dbh;
	protected $stmt;
	
	
	public function __construct(){
		
		$this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	}
	
	public function query($query){
		
		$this->stmt = $this->dbh->prepare($query);
	}
	
	public function bind($param, $value, $type = NULL){
		if(is_null($type)){
			switch(true){
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
				default:
					$type = PDO::PARAM_STR;
					break;
			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}
	
	public function execture(){
		$this->stmt->execute();
	}
	
	public function resultset(){
		$this->execture();
		
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
}