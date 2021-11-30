<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Фотогалерея</title>
</head>
<body>
<header>
        <div class='headerText'>Личный кабинет</div>
</header>
<main>
    <div class= "imgDiv">
        <form method="POST">
            <h4 class="email Text"> E-mail <input type="email" name="email"></br></h4>
            <h4 class="Text"> Пароль <input type="password" name="password"></br></h4>
            <h4 class="Text"><input type="submit" value="Войти"></h4>
        </form>
    </div>
    <?php
    if (isset($_COOKIE['islogged'])) {
        header('location:/lesson7-hw/page1.php');
    }

   if(isset($_POST['email'], $_POST['password'])) {
        require_once 'db.php';
        global $DBLink;
        $result = mysqli_query($DBLink, "SELECT * FROM users WHERE email='" . $_POST['email'] . "'");
        $result = mysqli_fetch_assoc($result);
        if(password_verify($_POST['password'], $result['password'])) {
           setcookie('islogged', $result['email'], $result['name'],'1');
           header('location:/lesson7-hw/page1.php');
           die();
        }
        else {
            echo "Неверный логин или пароль";
        }
    }
 ?>   
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
.name {
    margin-left: 25px;
}
.email {
    margin-left: 10px;
}
.Text {
    color:green;
    font-size: 20px;
    text-align: center;
    padding-bottom: 10px;
}