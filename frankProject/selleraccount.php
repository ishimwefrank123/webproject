<?php
session_start();
//$_SESSION['user']='frank';

include('database/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .ocean{
    height: 30px;
    width: 80px;
}
.buyer{
    margin-left: 100px;
    margin-top: -30px;
    width: 80px;
    height: 30px;
}
.celler{
    margin-left: 200px;
    margin-top: -30px;
    height: 30px;
    width: 400px;
}
.product{
    height: 30px;
    width: 400px;
    margin-left: 400px;
    margin-top: -30px;
}
.market{
    height: 30px;
    width: 400px;
    margin-left: 700px;
    margin-top: -30px;
}
.search{
    height: 30px;
    width: 80px;
    margin-left: 920px;
    margin-top: -30px;
}
.account{
    height: 30px;
    width: 80px;
    margin-left: 1040px;
    margin-top: -30px;
}
.help{
    height: 30px;
    width: 80px;
    margin-left: 1150px;
    margin-top: -30px;
}
.market-place{
    height: 700px;
    width: 800px;
    background-color: red;
    text-align: bottom;
}
.news{
    height: 700px;
    width: 400px;
    margin-left: 800px;
    margin-top: -700px;
    background-color: rgb(72, 255, 0);
}
.slogan{
    height: 30px;
    width: 1200px;
    background-color: rgb(171, 192, 167);
}
.add:hover{
    color: black;
    background-color: red;
}
.remove:hover{
    color: black;
    background-color: red;
}
.product input{
    border-radius: 20px;
    background-color: yellow;
}
.market input{
    border-radius: 20px;
    background-color: yellow;
}
.buyer-button{
    background-color: blue;
    color: white;
    border: none;
    height: 25px;
    border-radius: 12px;
}
.search.buyer-button:hover{
    background-color: green;
    color:black;
}
.search.buyer-button:active{
    background-color: green;
    opacity: 0.3;
}
 </style>
    <title>buyer account</title>
</head>
<body>
     <?php echo " <p style='color:blue;font-size:20px;'> welcome:\t"."<span style='color:#1c1c;font-size:18px'>" .$_SESSION['user']."</span></p>"?>
    <div class="ocean">NIYOMARI</div>
    <div class="buyer"><button class="buyer-button">STOCK</button></div>
    <div class="celler"> EMPLOYEE: <select name="" id="">
        <option value="name"></option>
        <option value="name"> diane</option>
        <option value="name">Aurore</option>
        <option value="">Mpanzi</option>
        <option value="name">Emmy</option>
        <option value="name">Meshack</option>
        <option value="name">Isaiac</option>
        <option value="name">patrick</option>
    </select> </div>
    <div class="product"> Product: <input type="text" placeholder="ENTER THE PRODUCT"></div>
    <div class="market">Market: <select name="market" id="">
        <option value="name">stock market</option>
        <option value="name">commodity market</option>
        <option value="name">Financial market</option>
        <option value="name">special market</option>
        <option value="name">command market</option>
        <option value="name">service</option>
        <option value="name">forex</option>
    </select> </div>
    <div class="search"><button class="buyer-button">SEARCH</button></div>
    <div class="account"><button class="buyer-button">ACCOUNT</button></div>
    <div class="help"><img src="help.png" height="30" width="40" align="center" alt="help"></div>
    <div class="market-place">
        <div class="add" style="background-color: rgb(218, 218, 234);border-radius: 10px;height: 100px;width: 500px;">Add product to the market <br>+</div>
        <div class="remove" style="background-color: rgb(117, 117, 135);border-radius: 10px;height: 100px;width: 500px;">Remove product from the market <br>- </div>
        <div class="buye" style="background-color: rgb(73, 73, 81);border-radius: 10px;height: 100px;width: 500px;"> Buy the product to yout account</div>
    </div>
    <div class="news">
        <U>CHAT ROOM</U><br>
        <a href="">Agasaro nganza</a>  <br><br>
        <a href="">IGIRANEZA Oreste</a> <br><br>
        <a href="">iNKOMEREZE Emeline</a> <br><br>
        <a href="">AGANZA Simeon</a> <br><br>
        <a href="">BIKORIMANA Protogene</a> <br><br>
        <a href="">MUNYEMBABAZI Meshac</a> <br><br>
        <a href="">TUYIZERE Brigitte</a> <br><br>
        <a href=""> Promise IRAKOZE</a> <br><br>
        <a href="">GASARO Lucky</a> <br><br>
        <a href="">MUHOZA Francine</a>  <br><br>   
    </div>
    <div class="slogan"><marquee behavior="" direction=""> shop easy and faster</marquee></div>
</body>
</html>