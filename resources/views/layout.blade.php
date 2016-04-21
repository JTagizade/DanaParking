<!DOCTYPE html>
<html>
  <head>
    <title>Donuz Parking</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>

    <script >
$(document).ready(function() {
$(".nomre").click(function() {
$(".numYoxla").slideToggle(500);
$(".nomre").addClass("activeTab");
$(".add").removeClass("activeTab");
});
$(".add").click(function() {
$(".numYoxla").slideUp(500);
$(".add").addClass("activeTab");
$(".nomre").removeClass("activeTab");
});
});
</script>


  </head>
  <body>

    <header>
      <div class="head">
        <div class="container">
          <div class="row rowInner">
            <div class="col m4 logo left">LOGO</div>
            <div class="col m3 right">
              <input type="submit" name="logon" value="Login" class="logon">
            </div>
          </div>
        </div>
      </div>
      <div class="nav">
        <nav>
          <div class="nav-wrapper ">
            <ul id="nav-mobile" class="left hide-on-med-and-down navCenter">
              <li><a href="sass.html"><i class="fa fa-road "> ƏSAS SAHİFƏ</a></i></li>
              <li><a href="badges.html"><i class="fa fa-road "> BÜTÜN ŞƏKİLLƏR</a></i></li>
              <li><a href="collapsible.html"><i class="fa fa-road "> AVTO DAYANACAQLAR</a></i></li>
              <li><a href="collapsible.html"><i class="fa fa-road "> TİXAC OLAN KUÇƏLƏR</a></i></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div class="navAdd">
      <div class="row center">
        <div class="col m6">
          <a href="#"><div class="col m5 right add">
            <i class="fa fa-plus "></i>
            <p>QAYDA POZUNTUSU ELAVE ET</p>
          </div>
        </a>
      </div>
      <div class="col m6">
        <a href="#"><div class="col m5 nomre activeTab">
          <i class="fa fa-search-plus"></i><p>NOMRE YOXLA</p></div></a>
        </div>
      </div>
    </div>
    <div class=" center">
      <div class="numYoxla center activeTa">
        <input type="text" >
        <input type="text" >
        <input type="text" >
        <input type="submit" value=">>>>">
      </div>
    </div>
  </header>

  @yield('content')
  

  


<footer>
<div class="footer">
<div class="container">
<div class="nav2">
  <div class="bottomNav">
    <ul id="nav-mobile" class="left hide-on-med-and-down ">
      <li><a href="sass.html"> ƏSAS SAHİFƏ</a></li>
      <li><a href="badges.html"> BÜTÜN ŞƏKİLLƏR</a></li>
      <li><a href="collapsible.html">AVTO DAYANACAQLAR</a></li>
      <li><a href="collapsible.html">TİXAC OLAN KUÇƏLƏR</a></li>
    </ul>

  </div>
</div>
<div class="copy">
  <p>c 2013-2014 <a href="#">danaparking.az</a> Bütün hüquqlar qorunur</p>
</div>
</div>
</div>
</footer>
</body>
</html>
