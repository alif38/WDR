<?php
session_start();
include '../dbconnection/DbConnection.php';
include '../AdminModel/SubscriberModel.php';
$subscriber = new Subscriber();
switch ($_POST['action']){
    case 'add':
        if(!empty($_POST['email'])){
            $subscriber->email = $_POST['email'];
        }

        $save = $subscriber->add();
        if($save){
            header('location:../../index.php');
        }
}