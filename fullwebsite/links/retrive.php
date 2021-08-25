<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<img src='<?php echo $image_src;  ?>' >  
</body>
</html>

<?php

include("config.php");
$sql = "SELECT name from images1 where id=1";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$image = $row['name'];
$image_src = "http://localhost:8080/Harish%20Moyal/fullwebsite/links/images/".$image;
$image_display = file_get_contents("http://localhost:8080/Harish%20Moyal/fullwebsite/links/images/1.jpg");
echo '<img src="data:image/jpeg;base64>';

?>