var metin = `
<div class='row'  id="alerm" >
<div class="alert alert-danger text-center ">
<div class="alert-title">Dikkat !</div>Yetkisiz Giris !!!</div>
</div>` ;

var burasi = document.getElementById("burasi");
burasi.innerHTML = metin;

setTimeout(function() {
	burasi.remove();
}, 3000);



