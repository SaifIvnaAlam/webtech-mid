<!DOCTYPE html>

<head>
    <title>LOGOUT</title>
</head>

<body>
    <?php
    session_start();

    if (isset($_SESSION['email'])) {
        session_destroy();
        header("location: Index.php");
    } 
    ?>
</body>
<?php include 'Footer.php'; ?>
</html>