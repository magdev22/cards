<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }

        .cards {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            height: 400px;
            width: 200px;
            margin-left: 10px;


        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 2px 16px;
        }

        .img {
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <ul>
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="#news">Админка</a></li>

    </ul>


    <h2>Card</h2>
    <div class="cards">
        <div class="card">
            <img class="img" src="1.jpg" alt="Avatar">
            <div class="container">
                <h4><b>John Doe</b></h4>
                <p>Architect & Engineer</p>
            </div>
        </div>
        <div class="card">
            <img class="img" src="1.jpg" alt="Avatar">
            <div class="container">
                <h4><b>John Doe</b></h4>
                <p>Architect & Engineer</p>
            </div>
        </div>
        <div class="card">
            <img class="img" src="1.jpg" alt="Avatar">
            <div class="container">
                <h4><b>John Doe</b></h4>
                <p>Architect & Engineer</p>
            </div>
        </div>
        <div class="card">
            <img class="img" src="1.jpg" alt="Avatar">
            <div class="container">
                <h4><b>John Doe</b></h4>
                <p>Architect & Engineer</p>
            </div>
        </div>
        <div class="card">
            <img class="img" src="1.jpg" alt="Avatar">
            <div class="container">
                <h4><b>John Doe</b></h4>
                <p>Architect & Engineer</p>
            </div>
        </div>
        <div class="card">
            <img class="img" src="1.jpg" alt="Avatar">
            <div class="container">
                <h4><b>John Doe</b></h4>
                <p>Architect & Engineer</p>
            </div>
        </div>
        <div class="card">
            <img class="img" src="1.jpg" alt="Avatar">
            <div class="container">
                <h4><b>John Doe</b></h4>
                <p>Architect & Engineer</p>
            </div>
        </div>
    </div>
</body>

</html>