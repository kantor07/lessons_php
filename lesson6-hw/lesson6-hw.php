<?php
/*
    1. Создать форму-калькулятор с операциями: сложение, 
    вычитание, умножение, деление. Не забыть обработать деление 
    на ноль! Выбор операции можно осуществлять с помощью тега 
    <select>.
*/
/*
    проверяем была ли нажата кнопка submit (посчитать) и если
    кнопка нажата, то можно создать переменные.
    Переменные будут принимать данные первого введенного операнда
*/
//создала переменную для вывода ответа
$answer = " ";
//if(isset($_POST['result'])) {   //можно использовать только при select
if(isset($_POST['numberOne']) && isset($_POST['numberTwo'])) {
    $number1 = $_POST['numberOne'];
    $number2 = $_POST['numberTwo'];
    $operation = $_POST['operation'];
//проверим, чтобы не было пустых полей
    if($number1 == NULL || $number2 == NULL) {
        $error_result = 'Не все поля заполнены';
    }    
/*
    проверяем что введены числа и если ошибок нет, 
    то считаем результат
*/
    else { 
        if(!is_numeric($number1) || !is_numeric($number2)) {
            $error_result = 'Должны быть введены числа';
        }
        else {
            switch($operation) {
                case '+':
                  $result = $number1 + $number2;
                    break; 
                case '-':
                    $result = $number1 - $number2;
                    break; 
                case '*':
                    $result = $number1 * $number2;
                    break;
                case '/':
                    if($number2 == '0') {
                        $error_result = 'На ноль делить нельзя';
                    }
                    else {
                        $result = $number1 / $number2;
                        break;
                    }
            }
        }
    }    
//результат запишем в переменную $answer
    if(isset($error_result)) {
        $answer =  "Ошибка: $error_result";
    }    
    else {
       $answer = "Ответ: $result";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
</head>
<body>
<header>
    <div class='headerText'>Калькулятор</div>
</header>
    <main>
        <div>
            <form method = "POST" action = "">
                <input  type = "text" name = "numberOne" placeholder = "Введите первое число"/>
                <select name = "operation">
                    <option value = "+"> + </option>
                    <option value = "-"> - </option>
                    <option value = "*"> * </option>
                    <option value = "/"> / </option>
                </select>
                <input name="operation" value="+" type="submit"/>
                <input name="operation" value="-" type="submit"/>
                <input name="operation" value="*" type="submit"/>
                <input name="operation" value="/" type="submit"/>
                <input type = "text" name = "numberTwo" placeholder = "Введите второе число"/>
                <input type = "submit" name = "result" value = "Посчитать"/>
            </form>
            <p class='headerText'><?php echo $answer ?></p>
        </div>
    </main>
</body>
</html>

<style type="text/css">
 /*стилей не много, поэтому не подключала их отдельно*/
body {
    background-color: #d8da3d; 
}
form {
    display: flex;
    justify-content: center;
    height: 50px;
    padding: 20px;    
}

.headerText {
    color:green;
    font-size: 30px;
    text-align: center;
    padding-bottom: 10px;
}
</style>