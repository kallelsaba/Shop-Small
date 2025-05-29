<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="Regstyle.css">




  <link rel="stylesheet" href="stylecat.css">
    <!--google fonts: jost-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!--cdnjs: font-awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--boxicons-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</head>

<body style="overflow: hidden;">
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

  <section class="vh-100" style="padding-top: -80px; margin-top: -80px;">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="loginphoto.png" class="img-fluid" alt="Phone image" style="max-width: 80%; height: auto;">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
          <form action="login.php" method="post">
            <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3">Login </p>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form1Example13"> <i class="bi bi-person-circle"></i> Email</label>
              <input type="email" id="form1Example13" class="form-control form-control-lg py-3" name="username" autocomplete="off" placeholder="enter your e-mail" style="border-radius:25px ;" />

            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form1Example23"><i class="bi bi-chat-left-dots-fill"></i> Password</label>
              <input type="password" id="form1Example23" class="form-control form-control-lg py-3" name="password" autocomplete="off" placeholder="enter your password" style="border-radius:25px ;" />

            </div>


            <!-- Submit button -->
            <!-- <button type="submit" class="btn btn-primary btn-lg">Login in</button> -->
            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
              <input type="submit" value="Sign in" name="login" class="btn btn-warning btn-lg text-light my-2 py-3" style="width:100% ; border-radius: 30px; font-weight:600; background-color: #E19FAE; border: 2px solid #CC1D60;" />
            </div>

          </form><br>
          <p align="center">I don't have an account <a href="register.php" class="text-warning" style="font-weight:600;text-decoration:none; color: #CC1D60 !important;">Register Here</a></p>
        </div>
      </div>
    </div>
  </section>







  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>