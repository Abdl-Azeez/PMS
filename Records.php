<!DOCTYPE html>
<html>
  <head>
    <title>Payslips Issued</title>
    <!-- <link rel="icon" href="\PMS\images\DKicon.png"> -->
    <!-- <link rel="stylesheet" href="\PMS\css\Records.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">
  </head>
  <style>
body {
  font-family: "Lato", sans-serif;
  margin: 0;
  padding: 0;

}
nav {
    display: block;
    background: #042344 !important;
    height: 60px;
    position: fixed;
    padding: 0 16px;
    width: 100%;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
}
ul{
  padding: 0;
  margin-top: 53px;
}
li{
  list-style-type: none;
}
a{
  text-decoration: none;
}

.toggle {
  position: absolute;
  top: 12px;
  /* right: 25px; */
  left: 25px;
  font-size: 23px;
  /* padding: 7px 30px; */
  color: #eee;
  cursor: pointer;
  transition: display .5s;
}

.sidenav {
  display: block;
  height: calc(100% - 60px) !important;
  left: 0px;
  -webkit-transform: translateX(0);
  transform: translateX(0);
  position: fixed;
  top: 0px;
  width: 150px;
  overflow-y: auto;
  will-change: transform;
  /* left: 0; */
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  background-color: #fff;
  overflow-x: hidden;
  transition: 0.5s;
  padding: 0 !important;
  margin-top: 60px;
  box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
}

.sidenav a {
  display: block;
  font-size: 13px;
  height: auto!important;
  color: black;
  padding: 20px 0 20px 24px!important;
  line-height: 1em!important;
  position: relative;
  cursor: pointer;
  vertical-align: middle;
  font-family: 'Vollkorn',cursive;
  font-weight: bolder;
}

.sidenav ul li a:hover {
  background-color: #b7b2b2!important;
  -webkit-transition: all 0s;
  -moz-transition: all 0s;
  -o-transition: all 0s;
  transition: all .8s;
}
.sidenav li a i{
line-height: inherit;
margin: 0 8px 0 0;
vertical-align: middle;
font-size: 19px;
}

.sidebar-profile{
  padding: 9px 24px;
  display: flex;
  flex-flow: column;
  align-items: center;
  border-bottom: 2px solid #e0e0e0;
}
.sidebar-profile-image {
  width: 80px;
  border-radius: 50%;
  background: grey;
}
.sidebar-profile .sidebar-profile-image img {
    width: 80px;
    height: 80px;
  }
  .sidebar-profile .sidebar-profile-info {
    margin-top: 5px;
}
#main {
  transition: margin-left .5s;
  padding: 16px;
  margin-left: 150px;
  padding-top: 80px;
}

.footer {
  border-top: 1px solid #e0e0e0;
  bottom: 0;
  color: #212121;
  height: 96px;
  padding: 24px;
  position: absolute;
  width: 103px;
  font-size: 13px;
  /* line-height: 24px; */
}
.footer p{
  margin: 0;
}
.footer a{
  color: #0277bb!important;
display: inline-block!important;
height: auto;
padding: 0!important;
}
.sidenav .footer  a:hover{
  background-color:transparent;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 8px;}
  ul{margin-top: 10px;}
  .footer{display:none;}
}
</style>
  <body>
    <nav>
      <!-- <span id="open" style="display:none;" class="toggle" onclick="openNav()">&rarr;</span> -->
      <i id="open" style="display:none; top:17px;" class="toggle material-icons" onclick="openNav()">arrow_forward</i>
      <a href="javascript:void(0)" id="close" class="toggle" onclick="closeNav()">&#9776;</a>

    </nav>
    <aside id="mySidenav" class="sidenav">
      <div class="sidebar-profile">
        <div class="sidebar-profile-image">
            <img src="../dk/images/userPlaceholder.png" alt="">
        </div>
        <div class="sidebar-profile-info">
          <p style="margin:0;">Hashim Maru</p>
          <b style="margin-left: 25px;">Issuer</b>
        </div>
      </div>
      <ul>
        <li><a href="#"><i class="material-icons">view_column</i>Records</a></li>
        <li><a href="#"><i class="material-icons">dvr</i>Issue Payslips</a></li>
        <li><a href="#"><i class="material-icons">account_circle</i>Profile</a></li>
        <li><a href="#"><i class="material-icons">exit_to_app</i>Logout</a></li>
      </ul>
      <div class="footer">
        <a href="https://www.capitaldk.com/">
          <img src="logo.jpg" alt="" style="height:50px; width:80px;">
          <p><span style="color:black;">&copy;</span><span style="color:#969595;">CAPITAL</span> DK</p>
        </a>
      </div>
    </aside>

    <div id="main">
      <h2>BODY SUBJECT</h2>
      <p>Body content</p>
    </div>

    <script>
    function openNav() {
      document.getElementById("mySidenav").style.display = "block";
      document.getElementById("main").style.marginLeft = "150px";
      document.getElementById("open").style.display = "none";
      document.getElementById("close").style.display = "block";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.display = "none";
      document.getElementById("main").style.marginLeft= "0";
      document.getElementById("close").style.display = "none";
      document.getElementById("open").style.display = "block";
    }
    </script>

  </body>
<html>
