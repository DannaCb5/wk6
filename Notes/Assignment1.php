<html>
<header>

<a></a>
</header>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["Assignment1.php"]);?>" method="post">;
$name = $email = $website = "";
Name: <input type="text" name="name"><br>;
E-mail: <input type="email" name="email"><br>;
Website: <input type="url" name="website">;
<input type="submit" value= "submit">
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
</form>
if ()
Welcome: <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"];?>

</body>
</html>