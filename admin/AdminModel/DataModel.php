<?php
class Student extends DbConnection{

    public $id;
    public $title;
    public $author;
    public $author_photo;
    public $region;
    public $topic;
    public $date;
    public $text;
    public $photo;
    public $link;
    public $author_link;
    public $region_link;
    public $topic_link;
    public $status;

    private $table_name = 'home_data';
    public function __construct()
    {
        parent::__construct();
    }


    public function getAllData(){
        $sql =  "SELECT *  FROM ".$this->table_name;
        $query = $this->db->query($sql);
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data ? $data : [];
    }

    public function getData(){
        $sql =  "SELECT *  FROM ".$this->table_name." ORDER BY date DESC LIMIT 10 ";
        $query = $this->db->query($sql);
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data ? $data : [];
    }



    public function getDataByRegion($region){
        $sql =  "SELECT *  FROM ".$this->table_name." WHERE region=? ORDER BY date DESC";
        $query = $this->db->prepare($sql);
        $query->execute([$region]);
        $data = $query->fetchALL(PDO::FETCH_ASSOC);
        return $data ? $data : [];
    }


    public function getDataById($id){
        $sql =  "SELECT *  FROM ".$this->table_name." WHERE id=? ORDER BY date DESC";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
        $data = $query->fetch(PDO::FETCH_ASSOC);
        return $data ? $data : [];
    }


    public function getDataByLink($link){
        $sql =  "SELECT *  FROM ".$this->table_name." WHERE link=?";
        $query = $this->db->prepare($sql);
        $query->execute([$link]);
        $data = $query->fetch(PDO::FETCH_ASSOC);
        return $data ? $data : [];
    }


    public function getDataByTopic($topic){
        $sql =  "SELECT *  FROM ".$this->table_name." WHERE topic=? ORDER BY date DESC";
        $query = $this->db->prepare($sql);
        $query->execute([$topic]);
        $data = $query->fetchALL(PDO::FETCH_ASSOC);
        return $data ? $data : [];
    }




    public function add(){
        $sql = "INSERT INTO ".$this->table_name." (author,title,region,topic,photo,text,link,author_link,region_link,topic_link,status)
         VALUES(?, ?, ? ,? ,? ,?,?,?,?,?,?)";
        $query = $this->db->prepare($sql);
        $query->execute([$this->author,$this->title,$this->region,$this->topic,$this->photo,$this->text,$this->link,$this->author_link,$this->region_link,$this->topic_link,$this->status]);
        return $this->db->lastInsertId();
    }
    
    public function update($id){
        
        $sql = "UPDATE ".$this->table_name." SET author=?,title=?,region=?,topic=?,text=?,link=?,author_link=?,region_link=?,topic_link=?,status=? WHERE id=?";
        $query = $this->db->prepare($sql);
        $update = $query->execute([$this->author,$this->title,$this->region,$this->topic,$this->text,$this->link,$this->author_link,$this->region_link,$this->topic_link,$this->status, $id]);
        return $update ? true : false;
        }

    public function update_photo($id){

        $sql = "UPDATE ".$this->table_name." SET photo=? WHERE id=?";
        $query = $this->db->prepare($sql);
        $update = $query->execute([$this->photo, $id]);
        return $update ? true : false;

    }
    public function update_author_photo($id){

        $sql = "UPDATE ".$this->table_name." SET author_photo=? WHERE id=?";
        $query = $this->db->prepare($sql);
        $update = $query->execute([$this->author_photo, $id]);
        return $update ? true : false;

    }


    public function uploadPhoto($FILES){

            $file_name = $FILES['photo']['name'];
            move_uploaded_file($FILES['photo']['tmp_name'], "../uploads/" . $file_name);

            return $file_name;

    }
    public function uploadAuthorPhoto($FILES){

        $file_name = $FILES['author_photo']['name'];
        move_uploaded_file($FILES['author_photo']['tmp_name'], "../uploads/" . $file_name);

        return $file_name;

    }

    public function latestData(){
        $sql = "SELECT * FROM ".$this->table_name." WHERE status = 'latest' ORDER BY date DESC LIMIT 3 ";
        $query = $this->db->query($sql);
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data ? $data : [];
    }


    public function delete($id){
        $sql = "DELETE FROM ".$this->table_name." WHERE id= ?";
        $query = $this->db->prepare($sql);
        $status = $query->execute([$id]);
        return $status ? true : false ;
    }


    public function dontMissData(){
        $sql = "SELECT * FROM ".$this->table_name." WHERE status = 'dontmiss' ORDER BY date DESC LIMIT 3 ";
        $query = $this->db->query($sql);
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data ? $data : [];
    }
    public function popularData(){
        $sql = "SELECT * FROM ".$this->table_name." WHERE status = 'popular' ORDER BY date DESC LIMIT 2 ";
        $query = $this->db->query($sql);
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data ? $data : [];
    }

    public function digitalEconomyData(){
        $sql = "SELECT * FROM ".$this->table_name." WHERE topic = 'Digital Economy' ORDER BY date DESC LIMIT 5 ";
        $query = $this->db->query($sql);
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data ? $data : [];
    }

    public function bangladeshData(){
        $sql = "SELECT * FROM ".$this->table_name." WHERE region = 'Bangladesh' ORDER BY date DESC LIMIT 5 ";
        $query = $this->db->query($sql);
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data ? $data : [];
    }

    public function totalArticle(){
        $count =  $this->db->query("SELECT COUNT(*)  FROM ".$this->table_name." ")->fetchColumn();

        return $count;
    }
}