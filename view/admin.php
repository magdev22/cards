<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/view/header.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/controller/create.php"); ?>



<h1> Добваление товара</h1>

<center><a href="/view/home.php" class="floating-button">HOME</a>
</center>
<center>
    <form action="" method="post" name="form">

        <legend> Название</legend>
        <input class="input" name="title" type="text"
         placeholder="только буквы" pattern="/^\s*[a-z0-9-а-яё]+(?:\s+[a-z0-9-а-яё]+){1,2}\s*$/i"
          min="1" max="250" required />
        <br>
        <!-- Поле ввода почты  -->
        <input class="input" name="descr" type="text" placeholder="только буквы" pattern="^[а-яА-ЯёЁa-zA-Z0-9]+$" min="1" max="110" />
        <br>
        <!-- Поле ввода для темы сообщения -->
        <input class="input" name="price" type="number" placeholder="" required pattern="^[ 0-9]+$" min="1" max="200000" />
        <br>
        <input class="input" name="img" type="text" placeholder="ссылка на фото" required min="1" max="700" />
        <br>
        <!-- Кнопка с надписью «Отправить», которая запускает обработчик формы -->
        <input type="submit" value="Отправить" />
    </form>
    
</center>
<style>
    .floating-button {
        text-decoration: none;
        display: inline-block;
        width: 140px;
        height: 45px;
        line-height: 45px;
        border-radius: 45px;
        margin: 10px 20px;
        font-family: 'Montserrat', sans-serif;
        font-size: 11px;
        text-transform: uppercase;
        text-align: center;
        letter-spacing: 3px;
        font-weight: 600;
        color: #524f4e;
        background: grey;
        box-shadow: 0 8px 15px rgba(0, 0, 0, .1);
        transition: .3s;
    }

    .floating-button:hover {
        background: #2EE59D;
        box-shadow: 0 15px 20px rgba(46, 229, 157, .4);
        color: white;
        transform: translateY(-7px);
    }


    /* Настраиваем внешний вид полей ввода*/
    .input {
        display: inline-block;
        margin: 10px auto;
        border: 2px solid #b32323;
        padding: 10px 20px;
        font-family: Verdana, Arial, sans-serif;
        font-size: 16px;
    }

    textarea {
        display: inline-block;
        margin: 10px auto;
        border: 2px solid #911313;
        padding: 10px 20px;
        font-family: Verdana, Arial, sans-serif;
        font-size: 16px;
    }

    a {
        text-decoration: none;
    }
</style>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/view/footer.php"); ?>