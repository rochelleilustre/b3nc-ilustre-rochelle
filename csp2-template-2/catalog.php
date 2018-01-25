<?php

session_start();

function getTitle(){
	echo 'Catalog';
}

include 'partials/head.php';

$file = file_get_contents('assets/items.json');
$items = json_decode($file, true);

//var_dump($items);

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main id="catalogWrapper" class="wrapper">

		<h1>Catalog Page</h1>

		


		<a href="create_new_item.php">
			<button class="btn btn-primary">Add New Item</button>
			</a>
		<div class="items-wrapper">

			<!-- go to add new item page -->
			


			
			<?php 

			foreach($items as $key => $item) {
				echo '

				<div class="item-parent-container form-group">
					<a href="item.php?id='.$key.'">

					<div class="item-container">
						<h3>'.$item['name'].'</h3>
						<img src="'.$item['image'].'" alt="Mock data">
						<p>PHP '.$item['price'].'</p>
						<p>'.$item['description'].'</p>				
					</div><!-- end of item-container -->
					</a>
					<button class="btn btn-primary form-control">Add to Cart</button>	

				</div>	
				';
			}

			
			?>


		</div><!-- end of items-wrapper -->


		
	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php
include 'partials/foot.php';
?>


</body>
</html>