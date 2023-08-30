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
      * {
   box-sizing: border-box;
}
.product-item {
   width: 300px;
   text-align: center;
   margin: 0 auto;
   border-bottom: 2px solid #F5F5F5;
   background: white;
   font-family: "Open Sans";
   transition: .3s ease-in;
}
.product-item:hover {
   border-bottom: 2px solid #fc5a5a;
}
.product-item img {
   display: block;
   width: 100%;
}
.product-list {
   background: #fafafa;
   padding: 15px 0;
}
.product-list h3 {
   font-size: 18px;
   font-weight: 400;
   color: #444444;
   margin: 0 0 10px 0;
}
.price {
   font-size: 16px;
   color: #fc5a5a;
   display: block;
   margin-bottom: 12px;
}
.button {
   text-decoration: none;
   display: inline-block;
   padding: 0 12px;
   background: green;
   color: white;
   text-transform: uppercase;
   font-size: 12px;
   line-height: 28px;
   transition: .3s ease-in;
}
.button-update {
   text-decoration: none;
   display: inline-block;
   padding: 0 12px;
   background: blue;
   color: white;
   text-transform: uppercase;
   font-size: 12px;
   line-height: 28px;
   transition: .3s ease-in;
}
.button-delete {
   text-decoration: none;
   display: inline-block;
   padding: 0 12px;
   background: red;
   color: white;
   text-transform: uppercase;
   font-size: 12px;
   line-height: 28px;
   transition: .3s ease-in;
}
.cards {
    
    display : flex ;
flex-direction: row;
flex wrap :wrap ;
}

    </style>
</head>

<body>


    <ul class="menu-main">
  <li><a href="" class="active">home</a></li>
  <li><a href="/admin.php">admin</a></li>

</ul>

    


    <h2>Card</h2>
   
<div class="cards">
<?php  
include('db.php');
$sql = "SELECT * FROM products";
$products = $mysqli->query($sql);

foreach($products as $product){
?>
       
       <div class="product-item">
  <img src="<?php echo $product["img"] ; ?>">
  <div class="product-list">
    <h3><?php echo $product["title"] ; ?></h3>
    <h3><?php echo $product["descr"] ; ?></h3>
      <span class="price"><?php  echo $product["price"] ; ?></span>
      <a href="" class="button">В корзину</a>
      <a href="update.php?id=<?php echo $product["id"] ; ?>"  class="button-update">изменить</a>
      <a href="delete.php?id=<?php echo $product["id"] ; ?>" class="button-delete">удалить</a>
  </div>
</div>
 <?php }
?>
</div> 
</body>

</html>