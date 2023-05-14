<?php
include_once "database.php";
$sql = "SELECT name, email, password FROM users where email='" . $_POST['email'] ."' AND password='" . $_POST['password'] ."'";
$result = $conn -> query($sql);

session_start();
if(isset($_SESSION['isLoggedIn'])){
	$isLoggedIn = $_SESSION['isLoggedIn'] ? true : false;
}else{
	$isLoggedIn = false;
}

if($isLoggedIn){
    echo '<script>alert("User already login!")
		window.location.href = "display-user.php"
		</script>';
}else{
    if ($result->num_rows > 0) {
        $row = $result -> fetch_assoc();
        $_SESSION["email"] = $row['email'];
        $_SESSION["name"] = $row['name'];
        $_SESSION["isLoggedIn"] = true;
        echo '<script>alert("Login Berhasil!")
		window.location.href = "display-user.php"
		</script>';
    }else{
        echo '<script>alert("Email atau password yang anda masukkan salah!")
		window.location.href = "login-page.php"
		</script>';
    }
}