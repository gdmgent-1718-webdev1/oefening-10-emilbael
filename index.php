

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <form action="index.php" method= "POST">
       Voornaam: <input type="text" name="voornaam" placeholder="test"><br>
       Familienaam: <input type="text" name="familienaam"><br>
       E-mail: <input type="text" name="email"><br>
       Wachtwoord: <input type="text" name="wachtwoord"><br>
       Bericht: <input type="text" name="bericht"><br>
       <input type="submit" name="send">
   </form> 

   <?php
$send = isset($_REQUEST['send']);
if ($send) {
echo "Voornaam: ".$_POST["voornaam"]."<br>";
echo "Familienaam: ".$_POST["familienaam"]."<br>";
echo "E-mail: ".$_POST["email"]."<br>";
echo "Wachtwoord: ".$_POST["wachtwoord"]."<br>";
echo "Bericht: ".$_POST["bericht"]."<br>";
}
?>
</body>
</html>