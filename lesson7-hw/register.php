<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Фотогалерея</title>
</head>
<body>
<header>
        <div class='headerText'>Регистрация</div>
</header>
<main>
    <div class= "imgDiv">
        <form method="POST">
            <h4 class="name Text"> Имя <input type="name" name="name"></br></h4>
            <h4 class="email Text"> E-mail <input type="email" name="email"></br></h4>
            <h4 class="Text"> Пароль <input type="password" name="password"></br></h4>
            <h4 class="Text"><input type="submit" value="Зарегистрировать"></h4>
        </form>
    </div>
    <?php
   
   if(isset($_POST['email'], $_POST['password'], $_POST['name'])) {
       require_once 'db.php';
       global $DBLink;
       $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
       mysqli_query($DBLink, "INSERT INTO users SET email='" . $_POST['email'] . "', password='" . $password . "', name='" . $_POST['name'] . "'");
       echo "Успешная регистрация";
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