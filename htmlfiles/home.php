<!DOCTYPE html>
<html lang="en" dir="ltr">
    
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="basic01.css">
        <title>ecommerce</title>
    </head>
    <body>
        <script src="index.js"></script>
        <div class="topnav">
            <a class="active" href="home.php">Home</a>
        </div>
        <h1 class="header01">Faertan Naert Login Page</h1>

        
        <p id="faertannaert01" class="normal01"></p>
        <form action="welcome.php" method="post">
        <p class="formline">Name: <input type="text" name="name"><br></p>
        <p class="formline">E-mail: <input type="text" name="email"><br></p>
        <p class="formline"><input class="button01" type="submit"></p>
        </form>

        <?php include 'info.php';?>
    </body>
</html>