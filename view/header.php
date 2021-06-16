<!DOCTYPE html>
<html>

<?php include 'C:/xampp/htdocs/pizza2/util/main.php'?>
<!-- Since this is included in many files, we can't use relative URLs,
     so we need to use $app_path to specify generally usable URLs.-->
<!-- the head section -->
<head>
    <title>My Pizza Shop</title>
     <link rel="stylesheet" type="text/css"
          href="<?php echo $app_path . 'main.css'?>"
          >
<!-- the body section -->
<body>
    <aside>
    <img src="<?php echo $app_path . 'images/pizzapie.jpg';?>" alt="Pizza" style="width:150px;height:100px">
    </aside>
    <header><h1>My Pizza Shop<br></h1></header>
    <aside>
        <br>
        <a href="<?php echo $app_path . 'admin/'?>">Admin Service</a>
        <br><br>
        <a href="<?php echo $app_path . 'pizza/'?>">Student Service</a>
    </aside>
<!-- </body> -->
<!-- </html> -->
<!-- The reason we put closing tags here is because
when you open the program you got to index.php which includes
header and footer-->
