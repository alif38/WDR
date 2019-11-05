<?php
session_start();
include '../dbconnection/DbConnection.php';
include '../AdminModel/AdminModel.php';
$admin = new Admin();
switch ($_POST['action']) {
	case 'login_process':
		$getAdmin = $admin->GetAdminByEmail($_POST['email']);
		if(count($getAdmin) > 0 && $getAdmin['email']!=''){
		    if($getAdmin['password'] == md5($_POST['password'])){
		        $_SESSION['user_id']=$getAdmin['id'];
                $_SESSION['admin_name']=$getAdmin['name'];
                $_SESSION['admin_email']=$getAdmin['email'];
                $_SESSION['admin_photo']=$getAdmin['photo'];
                $_SESSION['admin_phone']=$getAdmin['phone'];
		        header('location:../index.php');
            }
		    else{
		        $_SESSION['msg']= " <div class='alert alert-danger'>Wrong Password</div>  ";
                header('location:../admin-login.php');
            }
        }
		else{
            $_SESSION['msg']= " <div class='alert alert-danger'>Wrong email</div>  ";
            header('location:../admin-login.php');
        }
		break;

    case 'logout':
        session_destroy();
        header('location:../admin-login.php');
        break;


    case 'add':
        $count = 0;
         $admin->name = $_POST['name'];
         $admin->email = $_POST['email'];
         $admin->password = md5($_POST['password']);
         $admin->photo = $admin->uploadPhoto($_FILES);
         $admin->phone = $_POST['phone'];
         $admin->designation = $_POST['designation'];
         $admin->address = $_POST['address'];
         $admin->status = $_POST['status'];
         $getData = $admin->GetAdmin();
         foreach ($getData as $data){
             if($data['name'] == $_POST['name'] || $data['email'] == $_POST['email'] || $data['phone'] == $_POST['phone']){
                 $_SESSION['msg'] = " <div class='alert alert-warning'>Already exist</div> ";
                 header('location:../add_admin.php');
                 stop();
             }
             }

             $save = $admin->add();
             if ($save) {
                 $_SESSION['msg'] = " <div class='alert alert-success'>Data added successfully</div> ";
                 header('location:../add_admin.php');
             } else {
                 $_SESSION['msg'] = " <div class='alert alert-danger'>Data not added</div> ";
                 header('location:../add_admin.php');

         }


        break;
    case 'update':

        if(!empty($_POST['name'])) {

            $admin->name = $_POST['name'];
        }
        if(!empty($_POST['email'])){

        $admin->email =$_POST['email'];
        }
        if(!empty($_POST['password'])){

            $admin->password =md5($_POST['password']);
        }
        if(!empty($_POST['phone'])){

            $admin->phone =$_POST['phone'];
        }
        if(!empty($_POST['designation'])){

            $admin->phone =$_POST['designation'];
        }
        if(!empty($_POST['address'])){

            $admin->address =$_POST['address'];
        }
        if(!empty($_POST['status'])){

            $admin->status =$_POST['status'];
        }

        $save = $admin->update($_POST['id']);


        $admin->photo = $admin->uploadPhoto($_FILES);
        if(!empty($_FILES['photo']['name'])){

            $admin->photo = $admin->uploadPhoto($_FILES);
            $update_photo = $admin->update_photo($_POST['id']);
            @unlink("uploads/".$_POST['old_photo']);
        }

        if ($save) {
            $_SESSION['msg'] = " <div class='alert alert-success'>Data added successfully</div> ";
            header('location:../add_admin.php');
        } else {
            $_SESSION['msg'] = " <div class='alert alert-danger'>Data not added</div> ";
            header('location:../add_admin.php');

        }


        break;
    case 'delete':

        $status = $admin->delete($_POST['id']);
        if($status){

            $_SESSION['msg'] = "<div class='alert alert-success'> Data deleted </div>";
            header("location:../admin_list.php");
        }
        else{
            $_SESSION['msg'] = "<div class='alert alert-danger'> Data not deleted </div>";
            header("location:../admin_list.php");
        }
    break;
	
	default:
		# code...
		break;
}

?>