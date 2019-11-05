<?php

class Admin extends DbConnection{
	public $id;
	public $name;
	public $email;
	public $password;
	public $phone;
	public $designation;
	public $address;
	public $status;
	public $photo;
	private $table_name = 'admin';

	public function __construct(){
		parent::__construct();
	}

	public function GetAdmin(){
        $sql = "SELECT * FROM ".$this->table_name;
        $query = $this->db->query($sql);
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data ? $data : [];
	}
    public function GetAdminByID($id){
        $sql = "SELECT * FROM ".$this->table_name." WHERE id= ?";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
        $data = $query->fetch(PDO::FETCH_ASSOC);
        return $data ? $data : [];
    }



    public function GetAdminByEmail($email){
        $sql = "SELECT * FROM ".$this->table_name."  WHERE email = ?";
        $query = $this->db->prepare($sql);
        $query->execute([$email]);
        $data = $query->fetch(PDO::FETCH_ASSOC);
        return $data ? $data : [];
    }

    public function add(){
        $sql = "INSERT INTO ".$this->table_name."(name,email,password,photo,phone,designation,address,status) VALUES(?, ?, ?, ?, ?, ?, ?, ?)  ";
        $query = $this->db->prepare($sql);
	    $save = $query->execute([$this->name,$this->email,$this->password,$this->photo,$this->phone,$this->designation,$this->address,$this->status]);
	    return $this->db->lastInsertId();
    }

    public function update($id){

        $sql = "UPDATE ".$this->table_name." SET name=?,email=?,password=?,phone=?,designation=?,address=?,status=? WHERE id=?";
        $query = $this->db->prepare($sql);
        $update = $query->execute([$this->name,$this->email,$this->password,$this->phone,$this->designation,$this->address,$this->status,$id]);
        return $update ? true : false;
    }

    public function uploadPhoto($FILES){
	    $file_name = time().$FILES['photo']['name'];
	    move_uploaded_file($FILES['photo']['tmp_name'],"../uploads/".$file_name);

	    return $file_name;
    }
    public function update_photo($id){

        $sql = "UPDATE ".$this->table_name." SET photo=? WHERE id=?";
        $query = $this->db->prepare($sql);
        $update = $query->execute([$this->photo, $id]);
        return $update ? true : false;

    }

    public function delete($id){
        $sql = "DELETE FROM ".$this->table_name." WHERE id= ?";
        $query = $this->db->prepare($sql);
        $status = $query->execute([$id]);
        return $status ? true : false ;
    }



}



?>