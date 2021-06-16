<?php
function initial_db() {
  //this will do for now, but it is conddered a bad
  //practice. Another program will show how to use OOD + Dependecny injection
    global $db;
    try {
    $query='delete from order_topping;';
    $query.='delete from pizza_orders;';
    $query.='delete from pizza_size;';
    $query.='delete from toppings;';
    $query.='delete from pizza_sys_tab;';
    $query.='insert into pizza_sys_tab values (1, 1, 1, 1);';
    $query.="insert into toppings values (1,1,'Pepperoni');";
    $query.="insert into pizza_size values (1,1,'Small');";
    $statement = $db->prepare($query);
    $statement->execute();
    } catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('errors/database_error.php');
    exit();
    }
    return $statement;
}

?>
