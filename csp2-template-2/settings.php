<?php

require 'connect.php'; //database connection



session_start();

if (!isset($_SESSION['current_user'])) {
	header('location: login.php');
} else {
	if ($_SESSION['role'] != 'admin')
		header('location: home.php');
}

function getTitle() {
	echo 'Settings';
}

include 'partials/head.php';

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<h1>Settings Page</h1>

		<table>
			<thead>
				<th>Username</th>
				<th>Password</th>
				<th>Email</th>
				<th>Role</th>
			</thead>
			<tbody>
				<?php

				$sql = "select * from users";

				$result = mysqli_query($conn, $sql);

				while ($users = mysqli_fetch_assoc($result)) {
				extract($users);

				//var_dump($users);

				// $file = file_get_contents('assets/users.json');
				// $users = json_decode($file, true);

				//foreach ($users as $key => $user) {
					echo '
					<tr>
						<td><a href="user.php?id='.$id.'">' . $username . '</a></td>
						<td>' . $password . '</td>
						<td>' . $email . '</td>
						<td>' . $role_id . '</td>
					</tr>
					';
				}

				?>
			</tbody>
		</table>
		
	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

mysqli_close($conn);

?>

</body>
</html>