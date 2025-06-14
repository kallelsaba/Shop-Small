<!doctype html>
<html lang="en">

<head>
  <title>Register</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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


    
</head>

<body style=" overflow: hidden;">

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

  <section class="vh-100" style="padding-top: -90px; margin-top: -90px;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100" >
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 50px;" >
            <div class="card-body p-md-2" >
              <div class="row justify-content-center">
              <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3">Sign up</p>
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  

                  <form class="mx-1 mx-md-4" action="add.php" method="post">
                    
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw" style=" margin-left: 20px;"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c"><!--<i class="bi bi-person-circle"></i> Your Name</label>-->
                        <input type="text" id="form3Example1c" class="form-control form-control-lg py-3" name="name" autocomplete="off" placeholder="enter your name" style="border-radius:25px ; margin-left: 20px;" />

                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw" style=" margin-left: 20px;"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c"><!--<i class="bi bi-envelope-at-fill"></i> Your Email</label>-->
                        <input type="email" id="form3Example3c" class="form-control form-control-lg py-3" name="username" autocomplete="off" placeholder="enter your Email" style="border-radius:25px ; margin-left: 20px;" />

                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw" style=" margin-left: 20px;"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c"><!--<i class="bi bi-chat-left-dots-fill"></i> Password</label>-->
                        <input type="password" id="form3Example4c" class="form-control form-control-lg py-3" name="password" autocomplete="off" placeholder="enter your password" style="border-radius:25px ; margin-left: 20px;" />
                      </div>
                    </div>
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <input type="submit" value="Register" name="register" class="btn btn-warning btn-lg text-light my-2 py-3" style="width:100% ; border-radius: 30px; font-weight:600; background-color: #E19FAE; border: 2px solid #CC1D60;" style="border-radius:25px ;" />

                    </div>

                  </form>
                  <p align="center">I already have an account <a href="index.php" class="text-warning" style="font-weight:600; text-decoration:none; color: #CC1D60 !important;">Login</a></p>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                  <img src="signupphoto3.png" class="img-fluid" alt="Sample image" style="max-width: 100%; height: auto;">

                </div>
              </div>
            </div>
          </div>
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