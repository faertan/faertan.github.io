<html>
    <head>
    <link rel="stylesheet" href="basic01.css">
    </head>
    <body>
        <p>Welcome <?php echo $_POST["name"]; ?></p>
        <p>We sent an email to <?php echo $_POST["email"];?></p>
        <?php include "info.php";?>
    </body>
</html>