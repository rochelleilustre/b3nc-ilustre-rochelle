<?php

session_start();

if (isset($_SESSION['current_user'])) {
	if ($_SESSION['role'] != 'admin')
		header('location: home.php');
}

function getTitle() {
	echo 'User Page';
}

include 'partials/head.php';

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<h1>User Page</h1>
		<?php

		$id = $_GET['id'];

		$file = file_get_contents('assets/items.json');
		$items = json_decode($file, true);

		?>
		<table>
			<tr>
				<td>Product Name</td>
				<td><?php echo $items[$id]['name']; ?></td>
			</tr>
			<tr>
				<td>Image</td>
				
				<td>
					<img src=" <?php echo $items[$id]['image']; ?>" alt="Mock image of beer">
				</td>
			</tr>
			<tr>
				<td>Price</td>
				<td><?php echo $items[$id]['price']; ?></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><?php echo $items[$id]['description']; ?> </td>
			</tr>
		</table>


		<a href="catalog.php"><button class="btn btn-default">Back</button>
		<button class="btn btn-primary">Edit</button>
		<button class="btn btn-danger">Delete</button>

	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

</body>
</html>