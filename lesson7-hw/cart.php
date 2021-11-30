<?php

session_start();
$_SESSION['name'] = $_POST['name'];
$_SESSION['product'] = $_POST['product'];
$_SESSION['count'] = $_POST['count'];
$_SESSION['price'] = $_POST['price'];

if(isset($_SESSION['product']) && isset($_SESSION['count'])){
    echo "Товар добавлен в карзину!<br/>";
    echo " ".$_SESSION['name']."<br/>";
    echo "Кол-во ".$_SESSION['count']."<br/>";
    echo "Вы должны заплатить: ".$_SESSION['count'] * $_SESSION['price']; 
    
}
