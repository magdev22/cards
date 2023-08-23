<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
            /*text-align: center;*/
            margin: 10;
            font-family: Verdana, Arial, sans-serif;
            font-size: 16px;
        }

        /* Настраиваем внешний вид полей ввода*/
        input {
            display: inline-block;
            margin: 10px auto;
            border: 2px solid #eee;
            padding: 10px 20px;
            font-family: Verdana, Arial, sans-serif;
            font-size: 16px;
        }

        textarea {
            display: inline-block;
            margin: 10px auto;
            border: 2px solid #eee;
            padding: 10px 20px;
            font-family: Verdana, Arial, sans-serif;
            font-size: 16px;
        }
    </style>
    <form action="" method="post" name="form">

        <input name="name" type="text" placeholder="Ваше имя" />
        <br>
        <!-- Поле ввода почты  -->
        <input name="email" type="text" placeholder="Ваша почта" />
        <br>
        <!-- Поле ввода для темы сообщения -->
        <input size="30" name="header" type="text" placeholder="Тема" />
        <br>
        <!-- Текстовое поле для самого сообщения -->
        <textarea cols="32" name="message" rows="5"> Текст сообщения
  </textarea>
        <br>
        <!-- Кнопка с надписью «Отправить», которая запускает обработчик формы -->
        <input type="submit" value="Отправить" />
    </form>
</body>

</html>


