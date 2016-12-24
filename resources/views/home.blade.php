
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
  <li class="w3-hide-small"><a href="#" class="w3-hover-white">Home</a></li>  
  <li class="w3-hide-small"><a href="#paketwebsite" class="w3-hover-white">Paket Website</a></li>
  <li class="w3-hide-small"><a href="#harga" class="w3-hover-white">Daftar Harga</a></li>
  <li class="w3-hide-small"><a href="#kontak" class="w3-hover-white">Kontak</a></li>
  <li class="w3-hide-small w3-right"><a href="#" class="w3-hover-white">Jasa Pembuatan Website</a></li>
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
    <h2>DAFTAR HARGA</h2>
    <p>Choose a pricing plan that fits your needs.</p><br>
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Basic</p>
        </li>
        <li class="w3-padding-16"><b>10GB</b> Storage</li>
        <li class="w3-padding-16"><b>10</b> Emails</li>
        <li class="w3-padding-16"><b>10</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 10</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-btn w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme-l2">
          <p class="w3-xlarge">Pro</p>
        </li>
        <li class="w3-padding-16"><b>25GB</b> Storage</li>
        <li class="w3-padding-16"><b>25</b> Emails</li>
        <li class="w3-padding-16"><b>25</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 25</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-btn w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Premium</p>
        </li>
        <li class="w3-padding-16"><b>50GB</b> Storage</li>
        <li class="w3-padding-16"><b>50</b> Emails</li>
        <li class="w3-padding-16"><b>50</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 50</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-btn w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
        </li>
      </ul>
    </div>
</div>

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="kontak">
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
</div>

<!-- Footer -->
<footer class=" w3-padding-32 w3-theme-d1 w3-center">
  <p>Jasa Pembuatan Website - GITC 2016</a></p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-btn w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>



</body>
</html>