<?php
class DbConnection{
	protected $db;

	public function __construct(){
		try{
			$this->db = new PDO("mysql:host=localhost;dbname=world_data_review","root",'');
		}
		catch(PDOException $e){
		    echo $e->getMessage();
		}
	}
}
?>