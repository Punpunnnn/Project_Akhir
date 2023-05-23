<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_php.css">
    <title>Register</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">

        <?php 
         
         if (isset($_POST['name']) && isset($_POST['guest']) && isset($_POST['date'])) {
			include 'db_conn.php';
		
			function validate($data){
			   $data = trim($data);
			   $data = stripslashes($data);
			   $data = htmlspecialchars($data);
			   return $data;
			}
		
			$name = validate($_POST['name']);
			$guest = validate($_POST['guest']);
			$date = validate($_POST['date']);
		
			if (empty($guest) || empty($name) || empty($date)) {
				header("Location: index.html");
			}else {
		
				$sql = "INSERT INTO booking(name,guest,date) VALUES('$name', '$guest', '$date')";
				$res = mysqli_query($conn, $sql);
		
				if ($res) {
					echo "<div class='message'>
							  <p>Successfully Booking!!</p>
						  </div> <br>";
					echo "<a href='index.html'><button class='btn'>Back to main page</button>";
				}else {
					echo "Your message could not be sent!";
				}
			}
		
		}else {
			header("Location: index.html");
		}
        ?>
        </div>
        <?php ?>
      </div>
</body>
</html>