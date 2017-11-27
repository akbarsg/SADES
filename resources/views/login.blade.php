<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
    body{
      background-image: url(img/bg.jpg) no-repeat center top;
    }
    .center-form{
      width: 585px;
      margin: 100px 400px 50px 400px;
      position: center;
      background-image: url(img/bg.png);
    }
    img{
      margin-left: 150px;
      padding-bottom: 90px;
    }
    .masukan{
      width: 300px;
      height: 40px;
      margin-left: 138px;
      border: none;
      border-bottom: 1px solid grey;
      padding-left: 20px;
    }
    p{
      margin-left: 170px;
    }
    .tombol{
      padding: 7px 25px 7px 25px;
      background-color: #C4332F;
      color: white;
      border: none;
      margin-left: 245px;
      border-radius: 3px;
      cursor: pointer;
    }
    .tombol:hover{
      background-color: #063D58;
    }
    a{
      text-decoration: none;
      color: black;
    }
    a:hover{
      color: #C4332F;
    }
  </style>
</head>
<body>
<div class="form">
  <div class="center-form">
    <img src="images/logoWeb.png" width="273" height="70">
    <form>
      <input type="text" name="username" placeholder="Username" class="masukan"><br><br>
      <input type="password" name="pass" placeholder="Password" class="masukan"><br><br>
      <p>Belum mempunyai akun? <a href="signup.php">Klik Disini</a></p><br>
      <input type="submit" name="masuk" value="Login" class="tombol">
    </form>
  </div>
</div>