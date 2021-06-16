<?php
/*require is the same as include except that /**
 will cause a fatal error if the file is not there
 */
require('../util/main.php');
?>

<?php  include '../view/header.php'; ?>
<section>
    <h1>Admin Menu</h1>
    <ul class="last_paragraph">
        <li><a href="topping">Topping Manager</a></li>
        <li><a href="size">Size Manager</a></li>
        <li><a href="day">Day Manager</a></li>
        <li><a href="order">Order Manager</a></li>
    </ul>

</section>

<?php include '../view/footer.php'; ?>
