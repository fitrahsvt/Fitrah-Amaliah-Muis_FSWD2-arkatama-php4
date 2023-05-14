<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>
<body>
<?php
	include_once 'database.php';
	$sql = "DELETE FROM users WHERE id='" . $_GET["id"] . "'";
	if (mysqli_query($conn, $sql)) {
		echo '<script>alert("Data Berhasil Dihapus!")
		window.location.href = "display-user.php"
		</script>';
	} else {
		echo "Gagal menghapus data: " . mysqli_error($conn);
	}
	mysqli_close($conn);
?> 
</body>
</html>