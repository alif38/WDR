<?php
class Article extends DbConnection{

    public $id;
    public $article_link;
    public $author;
    public $author_photo;
    public $photo_author;
    public $p1;
    public $p2;
    public $p3;
    public $p4;
    public $p5;
    public $p6;
    public $p7;
    public $p8;
    public $h1;
    public $h2;
    public $h3;
    public $h4;
    public $h5;
    public $h6;
    public $h7;
    public $h8;
    public $photo1;
    public $photo2;
    public $photo3;
    public $photo4;
    public $photo5;
    public $photo6;
    public $photo7;
    public $photo8;
    public $footer;

    private $table_name = 'article_page';
    public function __construct()
    {
        parent::__construct();
    }
    public function getDatas(){
        $sql =  "SELECT *  FROM ".$this->table_name." ";
        $query = $this->db->query($sql);
        $data = $query->fetchALL(PDO::FETCH_ASSOC);
        return $data ? $data : [];
    }



    public function getData($link)
    {
        $sql = "SELECT *  FROM " . $this->table_name . " WHERE article_link = ?";
        $query = $this->db->prepare($sql);
        $query->execute([$link]);
        $data = $query->fetch(PDO::FETCH_ASSOC);
        return $data ? $data : [];
    }
    public function getDataById($id){
    $sql =  "SELECT *  FROM ".$this->table_name." WHERE id= ?";
    $query = $this->db->prepare($sql);
    $query->execute([$id]);
    $data = $query->fetch(PDO::FETCH_ASSOC);
    return $data ? $data : [];
}



    public function add(){
        $sql = "INSERT INTO ".$this->table_name." (article_link,author,author_photo,photo_author,p1,p2,p3,p4,p5,p6,p7,p8,h1,h2,h3,h4,h5,h6,h7,h8,photo1,photo2,photo3,footer)
         VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $query = $this->db->prepare($sql);
        $query->execute([$this->article_link,$this->author,$this->author_photo,$this->photo_author,$this->p1,$this->p2,$this->p3,$this->p4,$this->p5,$this->p6,$this->p7,$this->p8,$this->h1,$this->h2,$this->h3,$this->h4,$this->h5,$this->h6,$this->h7,$this->h8,$this->photo1,$this->photo2,$this->photo3,$this->footer]);
        return $this->db->lastInsertId();
    }

    public function uploadAuthorPhoto($FILES){

        $file_name = $FILES['author_photo']['name'];
        move_uploaded_file($FILES['author_photo']['tmp_name'], "../uploads/" . $file_name);

        return $file_name;

    }

    public function uploadphoto1Author($FILES)
    {

        $file_name = $FILES['photo1']['name'];
        move_uploaded_file($FILES['photo1']['tmp_name'], "../uploads/" . $file_name);

        return $file_name;
    }

        public function uploadphoto2Author($FILES){

        $file_name = $FILES['photo2']['name'];
        move_uploaded_file($FILES['photo2']['tmp_name'], "../uploads/" . $file_name);

        return $file_name;

    }

    public function uploadphoto3Author($FILES){

        $file_name = $FILES['photo3']['name'];
        move_uploaded_file($FILES['photo3']['tmp_name'], "../uploads/" . $file_name);

        return $file_name;

    }

    public function uploadphoto4Author($FILES){

        $file_name = $FILES['photo4']['name'];
        move_uploaded_file($FILES['photo4']['tmp_name'], "../uploads/" . $file_name);

        return $file_name;

    }

    public function uploadphoto5Author($FILES)
    {

        $file_name = $FILES['photo5']['name'];
        move_uploaded_file($FILES['photo5']['tmp_name'], "../uploads/" . $file_name);

        return $file_name;
    }

    public function uploadphoto6Author($FILES){

        $file_name = $FILES['photo6']['name'];
        move_uploaded_file($FILES['photo6']['tmp_name'], "../uploads/" . $file_name);

        return $file_name;

    }

    public function uploadphoto7Author($FILES){

        $file_name = $FILES['photo7']['name'];
        move_uploaded_file($FILES['photo7']['tmp_name'], "../uploads/" . $file_name);

        return $file_name;

    }

    public function uploadphoto8Author($FILES){

        $file_name = $FILES['photo8']['name'];
        move_uploaded_file($FILES['photo8']['tmp_name'], "../uploads/" . $file_name);

        return $file_name;

    }

    public function update($id){

        $sql = "UPDATE ".$this->table_name." SET article_link=?,author=?,photo_author=?,p1=?,p2=?,p3=?,p4=?,p5=?,p6=?,p7=?,p8=?,h1=?,h2=?,h3=?,h4=?,h5=?,h6=?,h7=?,h8=?,footer=? WHERE id=?";
        $query = $this->db->prepare($sql);
        $update = $query->execute([$this->article_link,$this->author,$this->photo_author,$this->p1,$this->p2,$this->p3,$this->p4,$this->p5,$this->p6,$this->p7,$this->p8,$this->h1,$this->h2,$this->h3,$this->h4,$this->h5,$this->h6,$this->h7,$this->h8,$this->footer, $id]);
        return $update ? true : false;
    }
   /* public function update_author_photo($id){

    $sql = "UPDATE ".$this->table_name." SET author_photo=? WHERE id=?";
    $query = $this->db->prepare($sql);
    $update = $query->execute([$this->author_photo, $id]);
    return $update ? true : false;

    }
    public function update_photo3($id){

        $sql = "UPDATE ".$this->table_name." SET photo3=? WHERE id=?";
        $query = $this->db->prepare($sql);
        $update = $query->execute([$this->photo3, $id]);
        return $update ? true : false;

    }
    public function update_photo1($id){

        $sql = "UPDATE ".$this->table_name." SET photo1=? WHERE id=?";
        $query = $this->db->prepare($sql);
        $update = $query->execute([$this->photo1, $id]);
        return $update ? true : false;

    }
    public function update_photo2($id){

        $sql = "UPDATE ".$this->table_name." SET photo2=? WHERE id=?";
        $query = $this->db->prepare($sql);
        $update = $query->execute([$this->photo2, $id]);
        return $update ? true : false;

    }
    public function update_photo4($id){

        $sql = "UPDATE ".$this->table_name." SET photo4=? WHERE id=?";
        $query = $this->db->prepare($sql);
        $update = $query->execute([$this->photo4, $id]);
        return $update ? true : false;

    }
    public function update_photo5($id){

        $sql = "UPDATE ".$this->table_name." SET photo5=? WHERE id=?";
        $query = $this->db->prepare($sql);
        $update = $query->execute([$this->photo5, $id]);
        return $update ? true : false;

    }
    public function update_photo6($id){

        $sql = "UPDATE ".$this->table_name." SET photo6=? WHERE id=?";
        $query = $this->db->prepare($sql);
        $update = $query->execute([$this->photo6, $id]);
        return $update ? true : false;

    }
    public function update_photo7($id){

        $sql = "UPDATE ".$this->table_name." SET photo7=? WHERE id=?";
        $query = $this->db->prepare($sql);
        $update = $query->execute([$this->photo7, $id]);
        return $update ? true : false;

    }
    public function update_photo8($id){

        $sql = "UPDATE ".$this->table_name." SET photo=? WHERE id=?";
        $query = $this->db->prepare($sql);
        $update = $query->execute([$this->photo8, $id]);
        return $update ? true : false;

    }
*/
    public function delete($id){
        $sql = "DELETE FROM ".$this->table_name." WHERE id= ?";
        $query = $this->db->prepare($sql);
        $status = $query->execute([$id]);
        return $status ? true : false ;
    }


}