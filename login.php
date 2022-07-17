<?php 
session_start();
ob_start();


include "fileworks/allClass.php";


if (isset($_POST["kullanici_girisi"])) {
  new login($_POST["username"],$_POST["password"]);

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="production/css/login.css">
  <link rel="stylesheet" href="production/js/jquery-min.js">
  <link rel="stylesheet" href="production/js/jquery.min.map">
  <link rel="stylesheet" href="production/js/popper.js">
  <link rel="stylesheet" href="production/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  
</head>
<body>



  <section class="vh-100">
    <div class="container py-5 h-100">

      <?php if($_GET["izinsiz"]=="giris"){ ?>

        <div id="burasi" ></div>
        <script src="production/js/giris.izinsiz.js" ></script>


      <?php } if($_GET["giris"]=="hatali"){ ?>

        <div id="burasi" ></div>
        <script src="production/js/giris.hatali.js" ></script>


      <?php } ?>
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
          class="img-fluid" alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
          <form action="#" method="post" >
            <!-- Email input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form1Example13">Email address</label>
              <input type="email" name="username" placeholder="E-Mail Giriniz" id="form1Example13" class="form-control form-control-lg" />

            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form1Example23">Password</label>
              <input type="password" name="password" id="form1Example23" placeholder="Password" class="form-control form-control-lg" />

            </div>

            <div class="d-flex justify-content-start align-items-center mb-4">
              <!-- Checkbox -->

              <a href="#!">Şifremi Unuttum ?</a>
            </div>
            <!-- Submit button -->
            <button type="submit"  id="butonlar" name="kullanici_girisi" class="btn btn-primary btn-lg btn-block">Giriş Yap</button>
          </form>
        </div>
      </div>
    </div>
  </section>



  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



  <script>


  </script>



</body>
</html>




