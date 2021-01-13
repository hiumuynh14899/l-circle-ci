<?php
session_start();
$id = $_GET['id'];

foreach ($_SESSION["shopping_cart"] as $keys => $values)
{
    if ($values["item_id"] == $id)
    {
        unset($_SESSION["shopping_cart"][$keys]);
        header('location: ../Shopping_Cart.php');
    }
}
