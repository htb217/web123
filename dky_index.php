<?php
    $servername = "localhost";
    $username = "root";
    $email = "";
	$sdt ="";
	$pass ="";
    $db="baitaplon";

    if(isset($_POST["gui"]))
    {
        $username = $_POST["username"];
        $email = $_POST["Email"];
		$sdt ="sdt";
		$pass="pass";
        echo "xin chào bạn: " . $username . ", Email: " . $email . ",sdt của pn" .$sdt . ",mật khẩu" .$pass;
			echo"<h3 style='color:red'>Đăng ký thành công</h3>";
    }

?>
<html>
<head>

</head>
<body>
   <div class="fluid-container">
       <form action="users.php" method="post">
							<h1>
                             <h2 style="color:red">Đăng Ký</h2>
                             <input type="username" name="username" placeholder="Name" required=""></br>
                             <input type="Email" name="Email" placeholder="Email" required=""></br>
							 <input type="sdt" name="sdt" placeholder="sdt" required=""></br>
							 <input type="pass" name="pass" placeholder="pass" required=""></br>
                             <button name="gui">Đăng ký</button></br>
							 </h1>
        </form>
	</div>
</body>
</html>