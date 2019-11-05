<?php
session_start();
include '../dbconnection/DbConnection.php';
include '../AdminModel/articleModel.php';
$article = new Article();

switch ($_POST['action']){
    case 'add':

        $article->article_link=$_POST['article_link'];
        $article->author=$_POST['author'];
        $article->author_photo=$article->uploadAuthorPhoto($_FILES);
        $article->photo_author =$_POST['photo_author'];
        $article->p1=$_POST['p1'];
        $article->p2=$_POST['p2'];
        $article->p3=$_POST['p3'];
        $article->p4=$_POST['p4'];
        $article->p5=$_POST['p5'];
        $article->p6=$_POST['p6'];
        $article->p7=$_POST['p7'];
        $article->p8=$_POST['p8'];
        $article->h1=$_POST['h1'];
        $article->h2=$_POST['h2'];
        $article->h3=$_POST['h3'];
        $article->h4=$_POST['h4'];
        $article->h5=$_POST['h5'];
        $article->h6=$_POST['h6'];
        $article->h7=$_POST['h7'];
        $article->h8=$_POST['h8'];
        $article->photo1 = $article->uploadphoto1Author($_FILES);
        $article->photo2 = $article->uploadphoto2Author($_FILES);
        $article->photo3 = $article->uploadphoto3Author($_FILES);
        $article->photo4 = $article->uploadphoto4Author($_FILES);
        $article->photo5 = $article->uploadphoto5Author($_FILES);
        $article->photo6 = $article->uploadphoto6Author($_FILES);
        $article->photo7 = $article->uploadphoto7Author($_FILES);
        $article->photo8 = $article->uploadphoto8Author($_FILES);
        $article->footer=$_POST['footer'];

        echo $save = $article->add();
        if($save){
            $_SESSION['msg'] = "<div class='alert alert-success'>Successfully added </div>";
            header('location:../add_article_content.php');
        }
        else{

            $_SESSION['msg'] = "<div class='alert alert-danger'> Failed to insert </div>";
            header('location:../add_article_content.php');
        }


        break;

    case 'update':


        if(!empty($_POST['article_link'])){
           echo $article->article_link=$_POST['article_link'];
        }
        if(!empty($_POST['author'])){
            echo  $article->author=$_POST['author'];
        }
        if(!empty($_POST['photo_author'])){
            echo $article->photo_author =$_POST['photo_author'];
        }
        if(!empty($_POST['p1'])){
            $article->p1=$_POST['p1'];
        }
        if(!empty($_POST['p2'])){
            $article->p2=$_POST['p2'];
        }
        if(!empty($_POST['p3'])){
            $article->p3=$_POST['p3'];
        }
        if(!empty($_POST['p4'])){
            $article->p4=$_POST['p4'];
        }
        if(!empty($_POST['p5'])){
            $article->p5=$_POST['p5'];
        }
        if(!empty($_POST['p6'])){
            $article->p6=$_POST['p6'];
        }
        if(!empty($_POST['p7'])){
            $article->p7=$_POST['p7'];
        }
        if(!empty($_POST['p8'])){
            $article->p8=$_POST['p8'];
        }
        if(!empty($_POST['h1'])){
            $article->h1=$_POST['h1'];
        }
        if(!empty($_POST['h2'])){
            $article->h2=$_POST['h2'];
        }
        if(!empty($_POST['h3'])){
            $article->h3=$_POST['h3'];
        }
        if(!empty($_POST['h4'])){
            $article->h4=$_POST['h4'];
        }
        if(!empty($_POST['h5'])){
            $article->h5=$_POST['h5'];
        }
        if(!empty($_POST['h6'])){
            $article->h6=$_POST['h6'];
        }
        if(!empty($_POST['h7'])){
            $article->h7=$_POST['h7'];
        }
        if(!empty($_POST['h8'])){
            $article->h8=$_POST['h8'];
        }
        if(!empty($_POST['footer'])){
            $article->footer=$_POST['footer'];

        }

/*

        if(!empty($_FILES['author_photo'])){

            $article->author_photo=$article->uploadAuthorPhoto($_FILES);
            $update_author_photo = $article->update_author_photo($_POST['id']);
            @unlink("uploads/".$_POST['old_author_photo']);
        }
        if(!empty($_FILES['photo1'])){
            $article->photo1 = $article->uploadphoto1Author($_FILES);
            $update_photo1 = $article->update_photo1($_POST['id']);
        }
        if(!empty($_FILES['photo2'])){
            $article->photo2 = $article->uploadphoto2Author($_FILES);
            $update_photo2 = $article->update_photo2($_POST['id']);
        }
        if(!empty($_FILES['photo3'])){
            $article->photo3 = $article->uploadphoto3Author($_FILES);
            $update_photo3 = $article->update_photo3($_POST['id']);
        }
        if(!empty($_FILES['photo4'])){
            $article->photo4 = $article->uploadphoto4Author($_FILES);
            $update_photo4 = $article->update_photo4($_POST['id']);
            @unlink("uploads/".$_POST['old_logo4']);
        }
        if(!empty($_FILES['photo5'])){
            $article->photo5 = $article->uploadphoto5Author($_FILES);
            $update_photo5 = $article->update_photo5($_POST['id']);
            @unlink("uploads/".$_POST['old_logo5']);
        }
        if(!empty($_FILES['photo6'])){
            $article->photo6 = $article->uploadphoto6Author($_FILES);
            $update_photo6 = $article->update_photo6($_POST['id']);
            @unlink("uploads/".$_POST['old_logo6']);
        }
        if(!empty($_FILES['photo7'])){
            $article->photo7 = $article->uploadphoto7Author($_FILES);
            $update_photo7 = $article->update_photo7($_POST['id']);
            @unlink("uploads/".$_POST['old_logo7']);
        }
        if(!empty($_FILES['photo8'])){
            $article->photo8 = $article->uploadphoto8Author($_FILES);
            $update_photo6 = $article->update_photo8($_POST['id']);
            @unlink("uploads/".$_POST['old_logo8']);
        }

*/

        $save = $article->update($_POST['id']);


        if($save){
            $_SESSION['msg'] = "<div class='alert alert-success'>Successfully Updated </div>";
            header('location:../main_article_list.php');
        }
        else{

            $_SESSION['msg'] = "<div class='alert alert-danger'> Failed to Update </div>";
            header('location:../main_article_list.php');
        }
        break;

    case 'delete':
        $status = $article->delete($_POST['id']);
        if($status){

            $_SESSION['msg'] = "<div class='alert alert-success'> Data deleted </div>";
            header("location:../main_article_list.php");
        }
        else{
            $_SESSION['msg'] = "<div class='alert alert-danger'> Data not deleted </div>";
            header("location:../main_article_list.php");
        }
        break;

}
