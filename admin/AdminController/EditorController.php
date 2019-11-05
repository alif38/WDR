<?php
session_start();
include '../dbconnection/DbConnection.php';
include '../AdminModel/DataModel.php';
$student = new Student();

switch ($_POST['action']){
    case 'add':
        $student->author = $_POST['author'];
        $student->author_photo = $student->uploadAuthorPhoto($_FILES);
        $student->title = $_POST['title'];
        $student->text = $_POST['text'];
        $student->region = $_POST['region'];
        $student->topic = $_POST['topic'];
        $student->link = $_POST['link'];
        $student->author_link = $_POST['author_link'];
        $student->region_link = $_POST['region_link'];
        $student->topic_link = $_POST['topic_link'];
        $student->status = $_POST['status'];

        $student->photo = $student->uploadPhoto($_FILES);

            $save = $student->add();
            if($save){
                $_SESSION['msg'] = "<div class='alert alert-success'>Successfully added </div>";
                header('location:../add_home_content.php');
            }
            else{

                $_SESSION['msg'] = "<div class='alert alert-danger'> Failed to insert </div>";
                header('location:../add_home_content.php');
            }


        break;

    case 'update':

        if(!empty($_POST['author'])){

            $student->author = $_POST['author'];
        }
        if(!empty($_POST['title'])){
            $student->title = $_POST['title'];
        }
        if(!empty($_POST['text'])){
            $student->text = $_POST['text'];
        }
        if(!empty($_POST['region'])){
            $student->region = $_POST['region'];
        }
        if(!empty($_POST['topic'])){
            $student->topic = $_POST['topic'];
        }
        if(!empty($_POST['link'])){
            $student->link = $_POST['link'];
        }
        if(!empty($_POST['author_link'])){
            $student->author_link = $_POST['author_link'];
        }
        if(!empty($_POST['region_link'])){
            $student->region_link = $_POST['region_link'];
        }
        if(!empty($_POST['topic_link'])){
            $student->topic_link = $_POST['topic_link'];
        }
        if(!empty($_POST['status'])){
            $student->status = $_POST['status'];
        }

            

        if(!empty($_FILES['photo']['name'])){

            $student->photo = $student->uploadPhoto($_FILES);
            $update_photo = $student->update_photo($_POST['id']);
            @unlink("uploads/".$_POST['old_logo']);
        }

        if(!empty($_FILES['author_photo']['name'])){

            $student->author_photo = $student->uploadAuthorPhoto($_FILES);
            $update_photo = $student->update_author_photo($_POST['id']);
            @unlink("uploads/".$_POST['old_logo']);
        }
        $save = $student->update($_POST['id']);
        

        if($save){
            $_SESSION['msg'] = "<div class='alert alert-success'>Successfully Updated </div>";
            header('location:../home_article_list.php');
        }
        else{

            $_SESSION['msg'] = "<div class='alert alert-danger'> Failed to Update </div>";
            header('location:../home_article_list.php');
        }
        break;


    case 'delete':
        $status = $student->delete($_POST['id']);
        if($status){

            $_SESSION['msg'] = "<div class='alert alert-success'> Data deleted </div>";
            header("location:../home_article_list.php");
        }
        else{
            $_SESSION['msg'] = "<div class='alert alert-danger'> Data not deleted </div>";
            header("location:../home_article_list.php");
        }
        break;
}
