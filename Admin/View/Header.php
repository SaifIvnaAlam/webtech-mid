<!DOCTYPE html>

<head>
    
	<title>Header</title>
	
</head>

	
<body>

    <h1 style="font-family:verdana; color: #0000FF; text-align: center" > CAR BUY AND SELL </h1>
	
    <div align= "center" style= "text-align=center" >
        <?php

        if (isset($_SESSION['email'])) {
            echo " Hi, ";
            echo $_SESSION["name"];
            echo '</a> | ';
            echo "<a href='SignOut.php'>Sign out</a>";
        } else {
            echo '<a href="Index.php">Login</a> | <a href="SignUp.php">Sign Up</a>';
        }

        ?>
    </div>
    <hr>

</body>

</html>