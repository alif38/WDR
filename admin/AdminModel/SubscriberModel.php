<?php
class Subscriber extends DbConnection{

    public $email;
    private $table_name = 'subscribers';
    public function __construct()
    {
        parent::__construct();
    }
    public function add(){
        $sql = "INSERT INTO ".$this->table_name." (email) VALUES(?)";
        $query = $this->db->prepare($sql);
        $query->execute([$this->email]);
        return $this->db->lastInsertId();
    }

    public function totalSubscription(){
        $count =  $this->db->query("SELECT COUNT(*)  FROM ".$this->table_name." ")->fetchColumn();

        return $count;
    }

}