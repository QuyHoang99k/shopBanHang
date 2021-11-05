<?php
require_once('layouts/header.php');
?>
<!-- Menu Stop  -->
<!-- Carousel -->
<div class="container">
  <div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselId" data-slide-to="0" class="active"></li>
      <li data-target="#carouselId" data-slide-to="1"></li>
      <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img src="https://www.uniqlo.com/jp/ja/news/topics/2021100501/img/mimg_1_m.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
         
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://www.uniqlo.com/jp/ja/news/topics/2021080201/img/mimg_1_m.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://www.uniqlo.com/jp/ja/news/topics/2021081801/img/mimg_1_m.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- Carousel Stop-->
<!-- Product start -->
<h1 style="text-align:center;margin-top:25px">Sản Phẩm Mới Nhất</h1>
<div class="container">
  <div class="row">
    <?php
    foreach ($lastestItems as $item) {
      echo ' <div class="col-md-3 col-6 product-item">
      <a href="detail.php?id='.$item['id'].'"><img src="'.$item['thumbnail'].'" style="width: 100%; height: 220px;"></a>
        <p>' . $item['category_name'] . '</p>
        <p>' . $item['title'] . '</p>
        <p style="color: red;">' . number_format($item['discount']) . ' VND</p>
        <p><button class="btn btn-success" onclick="addCart('.$item['id'].', 1)" style="width: 100%; border-radius: 0px;"><i class="bi bi-cart-plus-fill"></i> Thêm giỏ hàng</button></p>
      </div>';
    }
    ?>
  </div>
</div>
<!-- Product stop -->



<!-- Danh Mục Sản Phẩm  -->
<?php
$count = 0;
foreach($menuItems as $item) {
	$sql = "select Product.*, Category.name as category_name from Product left join Category on Product.category_id = Category.id where Product.category_id = ".$item['id']." order by Product.updated_at desc limit 0,4";
	$items = executeResult($sql);
	if($items == null || count($items) < 4) continue;
?>

<div class="container">
<h1 style="text-align: center; margin-top: 20px; margin-bottom: 20px;"><?=$item['name']?></h1>
<div class="row">
<?php
	foreach($items as $pItem) {
		echo '<div class="col-md-3 col-6 product-item">
				<a href="detail.php?id='.$item['id'].'"><img src="'.$pItem['thumbnail'].'" style="width: 100%; height: 220px;"></a>
				<p style="font-weight: bold;">'.$pItem['category_name'].'</p>
				<a href="detail.php?id='.$item['id'].'"><p style="font-weight: bold;">'.$pItem['title'].'</p></a>
				<p style="color: red; font-weight: bold;">'.number_format($pItem['discount']).' VND</p>
				<p><button class="btn btn-success" onclick="addCart('.$item['id'].', 1)" style="width: 100%; border-radius: 0px;"><i class="bi bi-cart-plus-fill"></i> Thêm giỏ hàng</button></p>
			</div>';
	}
?>
</div>
</div>
</div>
<?php
}
?>
<?php
require_once('layouts/footer.php');
?>