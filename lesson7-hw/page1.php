<?php
if (isset($_COOKIE['islogged'])) {
    echo "Добро пожаловать!";
}
else {
    header('location:/login.php');
}



require_once 'db.php';
global $DBLink;

$photos = mysqli_query($DBLink, 'SELECT id, photo_name, address_photo, price FROM photos ORDER BY view_count DESC');
if(!$photos)exit(mysqli_error());
?> 

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Фотогалерея</title>
</head>
<body>
<header>
        <div class='headerText'>Фотогалерея</div>
</header>
<main>
    <div class= "imgDiv">
        <?php 
        while($photo = mysqli_fetch_assoc($photos)) {
            echo 
            '<form method="POST" action="cart.php">
                <div class= "products">
                    <a href="page2.php?bigImage=' . $photo ['id'] . '">
                    <img class= "img" src=' . $photo ['address_photo'] . '></a></br>
                    <h4 class="nameProduct">' . $photo ['photo_name'] . '</h4></br>
                    <input name="name" type = "hidden" value="' . $photo ['photo_name'] . '</h4></br>
                    <h4 class="nameProduct"> Цена товара ' . $photo ['price'] . '</h4></br>
                    <input name="price" type="hidden" value="' . $photo ['price'] . '/>
                    <h4 class="nameProduct">Кол-во товара: <input name="count" type="text" size="5"/></h4></br>
                    <input class = "hrefCart" name="product" type="submit" value="Добавить в корзину"/>        
                </div>
            </form>'
            ;
        }
        ?>
    </div>    
    
</main>
</body>
</html>

<style type="text/css">
/*стилей не много, поэтому не подключала их отдельно*/
body {
    background-color: #d8da3d; 
}

.headerText {
    color:green;
    font-size: 30px;
    text-align: center;
    padding-bottom: 10px;
}

.imgDiv {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    flex-wrap: wrap;
    margin: 10px; 

}

.products {
    text-align: center;
}

.img {
    max-width: 300px;
    height: 200px;
    border: 2px solid green;
    margin: 10px;
} 

.img:hover {
    transform: scale(1.3); 
    border: 5px solid black; 
}

.nameProduct {
    text-align: center;
}

.hrefCart {
    text-decoration: none;
    color: #fff;
    appearance: none;
    border: 0;
    border-radius: 5px;
    background: #4676D7;
    color: #fff;
    padding: 8px 16px;
    font-size: 16px;
    text-align: center;
    margin-bottom: 40px;
    margin-top: 10px;
}

.hrefCart:hover {
    background: green; 
}

</style>