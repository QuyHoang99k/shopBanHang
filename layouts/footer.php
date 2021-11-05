

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h4>Giới Thiệu</h4>
        <ul>
          <li>Về Milo Top StrapLine</li>
          <li>Email: MiloTS.styles@gmail.com</li>
          <li>phone: 01234567</li>
          <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis adipisci id ea totam expedita quaerat aliquam soluta quas illum minima.</li>
        </ul>
      </div>
    </div>

  </div>
</footer>
<!-- Cart start -->

<?php
if(!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = [];
}
$count = 0;
// var_dump($_SESSION['cart']);
foreach($_SESSION['cart'] as $item) {
	$count += $item['num'];
}
?>
<script type="text/javascript">
	function addCart(productId, num) {
		$.post('api/ajax_request.php', {
			'action': 'cart',
			'id': productId,
			'num': num
		}, function(data) {
			location.reload()
		})
	}
</script>
<!-- Cart start -->
<span class="cart_icon">
	<span class="cart_count"><?=$count?></span>
	<a href="cart.php"><img src="https://gokisoft.com/img/cart.png"></a>
</span>
<!-- Cart stop -->
</body>
</html>