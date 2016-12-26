
<!DOCTYPE html>
<html>
<title>Jasa Pembuatan Website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/w3-theme-blue-grey.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<body id="myPage">

<!-- Navbar -->
<div class="w3-top">
 <ul class="w3-navbar w3-theme-d2 w3-left-align">
  <!-- <li class="w3-hide-small"><a href="#" class="w3-hover-white">Home</a></li>  
  <li class="w3-hide-small"><a href="#paketwebsite" class="w3-hover-white">Paket Website</a></li>
  <li class="w3-hide-small"><a href="#harga" class="w3-hover-white">Daftar Harga</a></li>
  <li class="w3-hide-small"><a href="#kontak" class="w3-hover-white">Kontak</a></li> -->
  <li class="w3-hide-small w3-right"><a href="#" class="w3-hover-white"><b>PEMESANAN</b> (SMS/WA) ke Jovan / Frencius - 08-997-283-263</a></li>
 </ul>

</div>


<!-- Paket website Container -->
 <div class="w3-container w3-padding-64 w3-center" id="paketwebsite">
<div class="w3-container">
    <h2>PAKET WEBSITE</h2>
  <p align="center">Pilih Paket Website di bawah ini</p><br>
  <div class="w3-row">
    <a href="javascript:void(0)" onclick="openCity(event, 'London');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Paket Website + Domain .COM/.NET</div>
    </a>
    <a href="javascript:void(0)" onclick="openCity(event, 'Paris');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Paket Website + Domain .WEB.ID</div>
    </a>
    <a href="javascript:void(0)" onclick="openCity(event, 'Tokyo');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Paket Domain + Hosting</div>
    </a>
  </div>

  <div id="London" class="w3-container city">
<br>    
  <span class="w3-tag w3-jumbo w3-red">C</span>
  <span class="w3-tag w3-jumbo">O</span>
  <span class="w3-tag w3-jumbo w3-yellow">M</span>
  <span class="w3-tag w3-jumbo w3-red">/</span>
  <span class="w3-tag w3-jumbo">N</span>
  <span class="w3-tag w3-jumbo w3-yellow">E</span>
  <span class="w3-tag w3-jumbo w3-yellow">T</span>
  <br><br>

  <p>Tulis di sini</p>

  </div>

  <div id="Paris" class="w3-container city" style="display:none">
    <br>    
  <span class="w3-tag w3-jumbo w3-red">W</span>
  <span class="w3-tag w3-jumbo">E</span>
  <span class="w3-tag w3-jumbo w3-yellow">B</span>
  <span class="w3-tag w3-jumbo w3-red">.</span>
  <span class="w3-tag w3-jumbo">I</span>
  <span class="w3-tag w3-jumbo w3-yellow">D</span>
  <br><br>

  <p>Tulis di sini</p>
  </div>

  <div id="Tokyo" class="w3-container city" style="display:none">
    <br>    
  <span class="w3-tag w3-jumbo w3-red">D</span>
  <span class="w3-tag w3-jumbo">O</span>
  <span class="w3-tag w3-jumbo w3-yellow">M</span>
  <span class="w3-tag w3-jumbo w3-red">A</span>
  <span class="w3-tag w3-jumbo">I</span>
  <span class="w3-tag w3-jumbo w3-yellow">N</span>
    <span class="w3-tag w3-jumbo w3-red">/</span>
  <span class="w3-tag w3-jumbo">H</span>
  <span class="w3-tag w3-jumbo w3-yellow">O</span>
  <span class="w3-tag w3-jumbo w3-red">S</span>
  <span class="w3-tag w3-jumbo">T</span>
  <span class="w3-tag w3-jumbo w3-yellow">I</span>
  <span class="w3-tag w3-jumbo w3-yellow">N</span>
  <span class="w3-tag w3-jumbo w3-yellow">G</span>

  <br><br>
  </div>
</div>

<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-border-blue-grey", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-blue-grey";
}
</script>



</div>
</div> 

<!-- Pricing Row -->
<div class="w3-row-padding w3-center w3-padding-64" id="harga">
    <h2>Jasa Pembuatan Website Kewirausahaan</h2>
    <p></p><br>
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Paket Website .COM / .NET</p>
        </li>
        <li class="w3-padding-16"><b>Website</b></li>
        <li class="w3-padding-16"><b>Domain .COM / .NET</b></li>
        <li class="w3-padding-16"><b>Space 100 MB</b></li>
        <li class="w3-padding-16"><b>1 Tahun</b></li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> Rp. 230.000</h2>
          <span class="w3-opacity">Periode 23-30 Des 2016</span>
        </li>

      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme-l2">
          <p class="w3-xlarge">Paket Website .WEB.ID</p>
        </li>
        <li class="w3-padding-16"><b>Website</b></li>
        <li class="w3-padding-16"><b>Domain .WEB.ID</b></li>
        <li class="w3-padding-16"><b>Space 100 MB</b></li>
        <li class="w3-padding-16"><b>1 Tahun</b></li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> Rp. 200.000</h2>
          <span class="w3-opacity">Periode 23 Des - 3 Jan 2017</span>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Hosting dan Domain</p>
        </li>
        <li class="w3-padding-16"><b>No Website</b> </li>
        <li class="w3-padding-16"><b>Domain COM/NET/WEB.ID</b></li>
        <li class="w3-padding-16"><b>Space 100 MB</b></li>
        <li class="w3-padding-16"><b>1 Tahun</b></li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> Rp. 100.000</h2>
          <span class="w3-opacity">Periode 23-30 Des 2016</span>
        </li>
      </ul>
    </div>
</div>

<!-- Contact Container -->
<!-- <div class="w3-container w3-padding-64 w3-theme-l5" id="kontak">
    <h2 class="w3-center">KONTAK</h2>
<p align="center"> Hubungi kami di sini.<p><br>
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Kontak Kami</span></div>
      <h3>Alamat</h3>
      <p>Yansen Victor / Jovan Arliando</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;Unikom, Bandung</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;+62 8382 1691 702</p>
     </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="#" target="_blank">
      <div class="w3-group">      
        <label class="w3-label">Name</label>
        <input class="w3-input" type="text" name="Name" required>
      </div>
      <div class="w3-group">      
        <label class="w3-label">Email</label>
        <input class="w3-input" type="text" name="Email" required>
      </div>
      <div class="w3-group">      
        <label class="w3-label">Message</label>
        <input class="w3-input" type="text" name="Message" required>
      </div>  
      <button type="submit" class="w3-btn w3-right w3-theme">Send</button>
      </form>
    </div>
  </div>
</div> -->

<!-- Footer -->
<footer class=" w3-padding-8 w3-theme-d1 w3-center">
  <p>Jasa Pembuatan Website - www.tugaswebsite.com</a></p>

</footer>



</body>
</html>