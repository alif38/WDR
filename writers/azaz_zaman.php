<?php
include "../admin/dbconnection/DbConnection.php";
include "../admin/AdminModel/DataModel.php";
include "../admin/AdminModel/articleModel.php";
$get = new Student();
$data = $get->getDataById($_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $data['author']; ?></title>
	<style type="text/css">
		.card {
				  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
				  max-width: 500px;
				  margin: auto;
				  text-align: center;
				}
		.card img{
			max-width: 60%;
			height: 300px;
		}

		.title {
				  color: grey;
				  font-size: 18px;
				}

		button {
				  border: none;
				  outline: 0;
				  display: inline-block;
				  padding: 8px;
				  color: white;
				  background-color: #000;
				  text-align: center;
				  cursor: pointer;
				  width: 100%;
				  font-size: 18px;
				}

		a {
		  text-decoration: none;
			  font-size: 22px;
			  color: black;
			}
			
		button:hover, a:hover {
		  opacity: 0.7;
		}

		.main{
			margin-top: 50px;
		}
	</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="main">
		<div class="card" >
		  <img src="../admin/uploads/<?php echo $data['author_photo']; ?>" alt="John" style="width:100%">
		  <h1><?php echo $data['author']  ?></h1>
		  <p class="title">Assistant Professor of Finance</p>
		  <p> Bangladesh Army International University of Science and Technology (BAIUST)</p>
		  <a href="#"><i class="fa fa-dribbble"></i></a>
		  <a href="#"><i class="fa fa-twitter"></i></a>
		  <a href="#"><i class="fa fa-linkedin"></i></a>
		  <a href="#"><i class="fa fa-facebook"></i></a>
		  <p><button>Contact</button></p>
		</div>
	</div>
</body>
</html>

