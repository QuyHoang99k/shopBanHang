<?php
session_start();
require_once('utils/utility.php');
require_once('database/dbhelper.php');

$sql = "select * from Category";
$menuItems = executeResult($sql);

$sql = "select Product.*,Category.name as category_name from Product left join Category on Product.category_id = Category.id order by Product.updated_at desc limit 0,8";
$lastestItems = executeResult($sql);

?>

<!doctype html>
<html lang="en">

<head>
  <title>Trang Chủ - Milo Shop</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="./css/index.css">

</head>

<body>
  <!-- Menu Start -->
  <header class="header">
    <div class="container">
      <ul class="nav">
        <li class="nav__img"><a href="index.php"><img src="./assets/photos/Logo-2.png" alt="123" style="height: 60px;"></a></li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php" style="margin-left:15px">Trang chủ</a>
        </li>
        <?php
        foreach ($menuItems as $item) {
          echo '<li class="nav-item">
                <a class="nav-link" style="margin:0 15px" href="category.php?id=' . $item['id'] . '">' . $item['name'] . '</a>
                </li>';
        }
        ?>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">liên hệ</a>
        </li>
      </ul>
    </div>
  </header>