<?php 
include "head.php";



if (isset($_POST["guncelle"])) {
    $guncelle = new profileUpdate($_POST["email"],$_POST["isim"],$_POST["soyisim"],$_POST["sifre1"],$_POST["sifre2"]);
    
}





include "sidebar.php"; 





?>


<div class="wrapper mt-0 ">
    <div class="page-content page-container" id="page-content">
        <div class="padding">

            <?php if ($_GET["islem"]== "tamam") { ?>
                <div class="row " id="alerm"  >
                   <div class="alert alert-success text-center ">
                    <div class="alert-title">Başarılı !!!</div>Başarılı Bir Şekilde Güncelleme Yapıldı !</div>
                </div>
                <script>
                    setTimeout(function() {
                        var burasi = document.getElementById("alerm");
                        burasi.remove();
                    }, 3000);
                </script>
                
            <?php } elseif ($_GET["islem"]== "hatali") { ?>
             <div class="row " id="alerm"  >
                <div class="alert alert-danger text-center ">
                    <div class="alert-title">Hata ! </div>Kayit işlemi Başarısız Oldu !</div>
                </div>
                 <script>
                    setTimeout(function() {
                        var burasi = document.getElementById("alerm");
                        burasi.remove();
                    }, 3000);
                </script>
            <?php } ?>
            
            
            <div class="row container d-flex justify-content-center">

                <div class="col-9 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="mb-5 text-center">Profil Ayarları</h2>
                            <form class="forms-sample" method="post" action="#">
                                <div class="form-group row">
                                </div>
                                <div class="form-group row mb-3">
                                    <label>E Mail Adresi</label>
                                    <input class="form-control" type="mail" name="email">
                                </div>

                                <div class="form-group row mb-3">
                                    <label>İsim</label>
                                    <input class="form-control" type="text" name="isim">
                                </div>
                                <div class="form-group row mb-3">
                                    <label>Soyisim</label>
                                    <input class="form-control" type="text"  name="soyisim">
                                </div>
                                <div class="border mt-3 mb-3 pt-3 pb-3 border-warning">
                                    <div class="form-group row justify-content-center">
                                        <div class="col-10 mt-3 mb-3">
                                            <label>Password</label>
                                            <input class="form-control" type="password"  name="sifre1">
                                        </div>

                                    </div>
                                    <div class="form-group row justify-content-center">
                                        <div class="col-10 mb-3">
                                            <label>Password Tekrar</label>
                                            <input class="form-control" type="password"  name="sifre2">
                                        </div>

                                    </div>
                                </div>
                                <button class="btn btn-success btn-md" name="guncelle" >Güncelle</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "foot.php"; ?>

