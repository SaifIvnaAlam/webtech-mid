<!DOCTYPE html>

<head>

    <title>HOME</title>

</head>

<body>

    <?php
    session_start();
    include 'Header.php';
    ?>
    <span style="color:deepskyblue;font-weight:bold; width:100%;height: 50%;text-align:center;padding:10px">
        
		
    <?php
        $message = '';
        if (isset($_SESSION['email'])) 
		{
			
			echo "<h2>Welcome to CAR BUY AND SELL</h2>";
			
            echo "<h1> Welcome Admin ".$_SESSION['name']." !!! </h1>";
			include 'EmployeeList.php';
			include 'CarList.php';
			include 'ClientList.php';
			
			echo '<div>';
			echo '<a style="font-size:200%; color: #33FFD7" href="EmployeeList.php">Employees List</a>';
			echo '<div>';
			echo '<a style="font-size:200%;  color: #33FFD7" href="CarList.php">Cars List</a>';
			echo '<div>';
            echo '<a style="font-size:200%; color: #33FFD7" href="ClientList.php">Clients List</a>';
			echo '<div>';
			echo '<img src="../Images/Home.jpg" alt="Index Image" width="50%" height="30%">';
			echo '<div>';
        } 
		else {
            $message = "Error";
            header("location:Index.php");
        }

        ?>
	</span>

</body>
<?php include 'Footer.php'; ?>
</html>