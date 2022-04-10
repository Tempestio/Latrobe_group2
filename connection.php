<?php
$userName = $_POST['userName'];
$userPassword = $_POST['userPassword'];


$con = new mysqli('database-2.c4fj7nfsjfzd.ap-southeast-2.rds.amazonaws.com', 'admin','adminadmin', 'Passwords');
	if($con->connect_error){
		die("Failed to connect : ".$con->connect_error);

    }
    else {

        $stmt = $con->prepare("SELECT * FROM Passwords WHERE userName = ?");
        $stmt ->bind_param("s", $userName);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if ($stmt_result->num_rows > 0) {

            if ($stmt_result->num_rows > 0) {
                $data = $stmt_result->fetch_assoc();
                if($data['userPassword'] === $userPassword) {
                    echo "<h2>Login Successful<h2>";
            } else {
                echo "<h2>Invalid Email or Password</h2>";
            }
        }
    }   
}
?>