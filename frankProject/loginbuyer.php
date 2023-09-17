<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginbuyers.css">
    <title>login buyer</title>
</head>
<body bgcolor="blue">
    <pre>
    <div class="log">
    <form action=""method="post"></form>
    Username:<br>
     <input type="text" id="username" style="border-radius: 10px;" required><br>
    Password:<br>
     <input type="password" id="password" style="border-radius: 10px;" required>
    <p id="register"></p>
   <a href="commodity.html"> <input type="submit"value="LOGIN" onclick="checkPassword()"  style="border-radius: 10px;"></a>
</pre>
</div>
<script src="script.js">
function checkPassword{
    let password=document.getElementById("password")
    if(password="user"){
        
    }
}
</script>
</body>
</html>