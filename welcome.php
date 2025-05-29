<?php
session_start();
include_once('connection.php');

// if(isset($_SESSION['name']) && isset($_SESSION['username'] )){

// }
$_SESSION['name'];
$_SESSION['username'];
?>
<!doctype html>
<html lang="en">

<head>
  <title>Welcome Form</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">


    <link rel="stylesheet" href="stylecat.css">
    <!--google fonts: jost-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!--cdnjs: font-awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--boxicons-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">


<style>
    .container{
        min-height: 60vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 15px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      
    }.container span{
        background-color: #CC1D60;
        color: white;
        padding: 15px;
        margin: 10px;
        border-radius: 8px;
        font-size: 25px;
        font-weight: 600;
        letter-spacing: 5px;
        text-transform: uppercase;
    }.container p{
        margin: 20px;
    }.container .btn{
        margin-top: -30px;
        width: 150px;
        background-color: #E19FAE;
        color: white;
        font-weight: 500;
        letter-spacing: 5px;
        text-transform: uppercase;
        border-radius: 20px;
    }.container .btn:hover{
        margin-top: -30px;
        width:200px;
        background-color: #CC1D60;
        font-weight: 500;
        transition: 1s;
        color: white;
    }
</style>
</head>

<body style="background-image: url('welcomephoto.png'); background-size: cover; overflow: hidden;">
<header>
        <a href="shopsmall.html" class="logo"><img src="logo.png" alt=""></a>
        <ul class="navmenu">
            <li><a href="shopsmall.html">home</a></li>
            <li><a href="categories.html">categories</a></li>
            <li><a href="add_product.html">add</a></li>
        </ul>

        <div class="nav-icon">
            <!--boxicons: search/user/cart + font-->
            <!--<a href="#"><i class='bx bx-search'></i></a>-->
            Join us: <br> 
            <a href="register.php"><i class='bx bx-user'></i></a>
            <!--<a href="#"><i class='bx bx-cart' ></i></a>-->
            <!--pour l'icone de menu-->
            <!--<div class="bx bx-menu" id="menu-icon"></div>-->
        </div>
    </header>



<div class="container">
<h3>Welcome,  <span><?=$_SESSION['name'];?></span></h3> <br><br><br>
<!--<p>Your Email id is : <h6><?=$_SESSION['username'];?></h6></p>-->
<a href="index.php" class="btn">LOGOUT</a>
</div>




  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>