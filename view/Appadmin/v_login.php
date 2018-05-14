<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login/Logout animation concept</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>

      
<style type="text/css">
*, *:before, *:after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}


.body {
  font-size: 62.5%;
  height: 100%;
  overflow: hidden;
  
}
@media (max-width: 768px) {
  html, body {
    font-size: 50%;
  }
}

svg {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  overflow: visible;
}

.svg-icon {
  cursor: pointer;
}
.svg-icon path {
  stroke: rgba(255, 255, 255, 0.9);
  fill: none;
  stroke-width: 1;
}

input, button {
  outline: none;
  border: none;
}



.demo {
  position: absolute;
  top: 20%;
  left: 50%;
  margin-left: -15rem;
  margin-top: -15rem;
  width: 30rem;
  height: 53rem;
  overflow: hidden;
}

.login {
  position: relative;
  height: 100%;
  background: linear-gradient(to bottom, rgba(146, 135, 187, 0.8) 0%, rgba(0, 0, 0, 0.6) 100%);
  transition: opacity 0.1s, -webkit-transform 0.3s cubic-bezier(0.17, -0.65, 0.665, 1.25);
  transition: opacity 0.1s, transform 0.3s cubic-bezier(0.17, -0.65, 0.665, 1.25);
  transition: opacity 0.1s, transform 0.3s cubic-bezier(0.17, -0.65, 0.665, 1.25), -webkit-transform 0.3s cubic-bezier(0.17, -0.65, 0.665, 1.25);
  -webkit-transform: scale(1);
          transform: scale(0.5);
}
.login.inactive {
  opacity: 0;
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}
.login__check {
  position: absolute;
  top: 16rem;
  left: 13.5rem;
  width: 14rem;
  height: 2.8rem;
  background: #fff;
  -webkit-transform-origin: 0 100%;
          transform-origin: 0 100%;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
}
.login__check:before {
  content: "";
  position: absolute;
  left: 0;
  bottom: 100%;
  width: 2.8rem;
  height: 5.2rem;
  background: #fff;
  box-shadow: inset -0.2rem -2rem 2rem rgba(0, 0, 0, 0.2);
}
.login__form {
  position: absolute;
  top: 50%;
  left: 0;
  width: 100%;
  height: 50%;
  padding: 1.5rem 2.5rem;
  text-align: center;
}
.login__row {
  height: 5rem;
  padding-top: 1rem;
  border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}
.login__icon {
  margin-bottom: -0.4rem;
  margin-right: 0.5rem;
}
.login__icon.name path {
  stroke-dasharray: 73.50196075439453;
  stroke-dashoffset: 73.50196075439453;
  -webkit-animation: animatePath 2s 0.5s forwards;
          animation: animatePath 2s 0.5s forwards;
}
.login__icon.pass path {
  stroke-dasharray: 92.10662841796875;
  stroke-dashoffset: 92.10662841796875;
  -webkit-animation: animatePath 2s 0.5s forwards;
          animation: animatePath 2s 0.5s forwards;
}
.login__input {
  display: inline-block;
  width: 22rem;
  height: 100%;
  padding-left: 1.5rem;
  font-size: 1.5rem;
  background: transparent;
  color: #FDFCFD;
}
.login__submit {
  position: relative;
  width: 100%;
  height: 4rem;
  margin: 5rem 0 2.2rem;
  color: rgba(255, 255, 255, 0.8);
  background: #FF3366;
  font-size: 1.5rem;
  border-radius: 3rem;
  cursor: pointer;
  overflow: hidden;
  transition: width 0.3s 0.15s, font-size 0.1s 0.15s;
}
.login__submit:after {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  margin-left: -1.5rem;
  margin-top: -1.5rem;
  width: 3rem;
  height: 3rem;
  border: 2px dotted #fff;
  border-radius: 50%;
  border-left: none;
  border-bottom: none;
  transition: opacity 0.1s 0.4s;
  opacity: 0;
}
.login__submit.processing {
  width: 4rem;
  font-size: 0;
}
.login__submit.processing:after {
  opacity: 1;
  -webkit-animation: rotate 0.5s 0.4s infinite linear;
          animation: rotate 0.5s 0.4s infinite linear;
}
.login__submit.success {
  transition: opacity 0.1s 0.3s, background-color 0.1s 0.3s, -webkit-transform 0.3s 0.1s ease-out;
  transition: transform 0.3s 0.1s ease-out, opacity 0.1s 0.3s, background-color 0.1s 0.3s;
  transition: transform 0.3s 0.1s ease-out, opacity 0.1s 0.3s, background-color 0.1s 0.3s, -webkit-transform 0.3s 0.1s ease-out;
  -webkit-transform: scale(30);
          transform: scale(30);
  opacity: 0.9;
}
.login__submit.success:after {
  transition: opacity 0.1s 0s;
  opacity: 0;
  -webkit-animation: none;
          animation: none;
}
.login__signup {
  font-size: 1.2rem;
  color: #ABA8AE;
}
.login__signup a {
  color: #fff;
  cursor: pointer;
}

.app {
  position: relative;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  display: none;
  transition: opacity 0.1s, -webkit-transform 0.3s cubic-bezier(0.68, -0.45, 0.465, 1.25);
  transition: opacity 0.1s, transform 0.3s cubic-bezier(0.68, -0.45, 0.465, 1.25);
  transition: opacity 0.1s, transform 0.3s cubic-bezier(0.68, -0.45, 0.465, 1.25), -webkit-transform 0.3s cubic-bezier(0.68, -0.45, 0.465, 1.25);
  -webkit-transform: scale(1.2);
          transform: scale(1.2);
}
.app.active {
  opacity: 1;
  -webkit-transform: scale(1);
          transform: scale(1);
}
.app.active .app__user-photo {
  -webkit-transform: scale(1);
          transform: scale(1);
}
.app.active .app__meeting {
  -webkit-transform: translateY(0);
          transform: translateY(0);
  opacity: 1;
}
.app.active .app__logout {
  -webkit-transform: scale(1);
          transform: scale(1);
}
.app__top {
  position: relative;
  height: 28rem;
  background: rgba(0, 0, 0, 0.5);
  padding: 6rem 1.5rem 2rem;
  text-align: center;
}
.app__bot {
  position: relative;
  height: 25rem;
  background: #fff;
}
.app__menu-btn {
  position: absolute;
  top: 2rem;
  left: 1.5rem;
  width: 1.8rem;
  height: 1.7rem;
  cursor: pointer;
}
.app__menu-btn span, .app__menu-btn:before, .app__menu-btn:after {
  position: absolute;
  left: 0;
  width: 100%;
  height: 1px;
  background: rgba(255, 255, 255, 0.6);
}
.app__menu-btn span {
  top: 0.8rem;
}
.app__menu-btn:before {
  content: "";
  top: 0;
}
.app__menu-btn:after {
  content: "";
  bottom: 0;
}
.app__icon {
  position: absolute;
  top: 2rem;
}
.app__icon.search {
  right: 1.5rem;
  stroke-dasharray: 61.847137451171875;
  stroke-dashoffset: 61.847137451171875;
  -webkit-animation: animatePath 0.5s 0.5s forwards;
          animation: animatePath 0.5s 0.5s forwards;
}
.app__hello {
  font-size: 2.2rem;
  color: #fff;
  font-weight: normal;
  margin-bottom: 3rem;
}
.app__user {
  position: relative;
  display: inline-block;
  width: 9rem;
  height: 9rem;
  margin-bottom: 3rem;
}
.app__user-photo {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  transition: -webkit-transform 0.3s 0.2s cubic-bezier(0.62, 0.35, 0.56, 1.55);
  transition: transform 0.3s 0.2s cubic-bezier(0.62, 0.35, 0.56, 1.55);
  transition: transform 0.3s 0.2s cubic-bezier(0.62, 0.35, 0.56, 1.55), -webkit-transform 0.3s 0.2s cubic-bezier(0.62, 0.35, 0.56, 1.55);
  -webkit-transform: scale(0);
          transform: scale(0);
}
.app__user-notif {
  position: absolute;
  top: 0;
  right: 0;
  width: 3rem;
  height: 3rem;
  border-radius: 50%;
  line-height: 3rem;
  text-align: center;
  background: #50D2C2;
  color: #fff;
  font-size: 1.5rem;
}
.app__month:after {
  content: "";
  display: table;
  clear: both;
}
.app__month-name {
  display: inline-block;
  color: rgba(255, 255, 255, 0.6);
  font-size: 1.2rem;
  text-transform: uppercase;
}
.app__month-btn {
  display: inline-block;
  width: 1.2rem;
  height: 1.2rem;
  border: 1px solid rgba(255, 255, 255, 0.6);
  border-left: none;
  border-bottom: none;
  cursor: pointer;
}
.app__month-btn.left {
  float: left;
  -webkit-transform: rotate(-135deg);
          transform: rotate(-135deg);
}
.app__month-btn.right {
  float: right;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}
.app__days {
  height: 7rem;
  padding: 1.5rem 2rem;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}
.app__day {
  width: 14%;
  text-align: center;
  font-size: 1.2rem;
}
.app__day.weekday {
  color: #919197;
  text-transform: uppercase;
}
.app__day.date {
  font-size: 1.2rem;
  font-weight: bold;
  color: #3C3C43;
}
.app__meeting {
  position: relative;
  height: 6rem;
  border-top: 1px solid #EEEEEF;
  padding: 1rem 2rem 1rem 7.5rem;
  transition: opacity 0.3s, -webkit-transform 0.3s;
  transition: transform 0.3s, opacity 0.3s;
  transition: transform 0.3s, opacity 0.3s, -webkit-transform 0.3s;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  opacity: 0;
}
.app__meeting:nth-child(1) {
  transition-delay: 0.2s;
}
.app__meeting:nth-child(2) {
  transition-delay: 0.3s;
}
.app__meeting:nth-child(3) {
  transition-delay: 0.4s;
}
.app__meeting:nth-child(4) {
  transition-delay: 0.5s;
}
.app__meeting:nth-child(5) {
  transition-delay: 0.6s;
}
.app__meeting-photo {
  position: absolute;
  left: 2rem;
  top: 1rem;
  width: 4rem;
  height: 4rem;
}
.app__meeting-name {
  color: #000;
  font-size: 1.3rem;
}
.app__meeting-info {
  color: #949498;
  font-size: 1.1rem;
}
.app__logout {
  position: absolute;
  bottom: 3.3rem;
  right: 3.3rem;
  width: 4.6rem;
  height: 4.6rem;
  margin-right: -2.3rem;
  margin-bottom: -2.3rem;
  background: #FC3768;
  color: #fff;
  font-size: 2rem;
  border-radius: 50%;
  cursor: pointer;
  transition: bottom 0.4s 0.1s, right 0.4s 0.1s, opacity 0.1s 0.7s, background-color 0.1s 0.7s, -webkit-transform 0.4s 0.4s;
  transition: bottom 0.4s 0.1s, right 0.4s 0.1s, transform 0.4s 0.4s, opacity 0.1s 0.7s, background-color 0.1s 0.7s;
  transition: bottom 0.4s 0.1s, right 0.4s 0.1s, transform 0.4s 0.4s, opacity 0.1s 0.7s, background-color 0.1s 0.7s, -webkit-transform 0.4s 0.4s;
  -webkit-transform: scale(0);
          transform: scale(0);
}
.app__logout.clicked {
  bottom: 50%;
  right: 50%;
  -webkit-transform: scale(30) !important;
          transform: scale(30) !important;
  opacity: 0.9;
}
.app__logout.clicked svg {
  opacity: 0;
}
.app__logout-icon {
  position: absolute;
  width: 3rem;
  height: 3rem;
  top: 50%;
  left: 50%;
  margin-left: -1.5rem;
  margin-top: -1.5rem;
  transition: opacity 0.1s;
}
.app__logout-icon path {
  stroke-width: 4px;
  stroke-dasharray: 64.36235046386719;
  stroke-dashoffset: 64.36235046386719;
  -webkit-animation: animatePath 0.5s 0.5s forwards;
          animation: animatePath 0.5s 0.5s forwards;
}

.ripple {
  position: absolute;
  width: 15rem;
  height: 15rem;
  margin-left: -7.5rem;
  margin-top: -7.5rem;
  background: rgba(0, 0, 0, 0.4);
  -webkit-transform: scale(0);
          transform: scale(0);
  -webkit-animation: animRipple 0.4s;
          animation: animRipple 0.4s;
  border-radius: 50%;
}
.fixed-top {
    position: relative;
    top: 0;
    right: 0;
    left: 0;
	bottom:0;
    z-index: 1030;
}

nav {
	margin:auto; 
	text-align: left;
	
}

nav ul {
	background: #0099ff; 
	padding:0px 230px;
	border-radius: 0px;  
	list-style: none;
	position: relative;
	display: inline-table;
	
}
nav ul:after {
		content: ""; clear: both; display: block; 
	}
		nav ul li {
		float: left;
	}
		nav ul li:hover {
			background: #F33;
		}
			nav ul li:hover a {
				color: #fff;
			}
		
		nav ul li a {
			display: block; padding: 15px 40px;
			color: #fff; text-decoration: none;
		}
			
		
	nav ul ul {
		background: #0099ff; border-radius: 0px; padding: 0px;
		position: relative; top: ;
	}
		nav ul ul li {
			float: none; 
			border-top: 0px solid #0099ff;
			border-bottom: 1px solid #0099ff; position: ;
		}
			nav ul ul li a {
				padding: 0 px 0px ;
				color: #fff;
			}	
				nav ul ul li a:hover {
					background: #666;
				}
		
	nav ul ul ul {
		position: absolute; left: 100%;  top:0;
	}
		

@-webkit-keyframes animRipple {
  to {
    -webkit-transform: scale(3.5);
            transform: scale(3.5);
    opacity: 0;
  }
}

@keyframes animRipple {
  to {
    -webkit-transform: scale(3.5);
            transform: scale(3.5);
    opacity: 0;
  }
}
@-webkit-keyframes rotate {
  to {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
@keyframes rotate {
  to {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
@-webkit-keyframes animatePath {
  to {
    stroke-dashoffset: 0;
  }
}
@keyframes animatePath {
  to {
    stroke-dashoffset: 0;
  }
}
#footer_bottom {
background-color: #0e639d;
padding-top: 13px;
padding-bottom: 17px;
margin-top:70px;
}
#footer_bottom .copyright {
text-align: center;
font-size: 16px;
color: #81ccff;
}
#footer_bottom .copyright a {
color: #fff;
font-size: 19px;
}
.blog{
width:700px;
height:400px;
border:1px solid #e2e2e2;
float:right;
margin-right:300px;
background-color:white;
}
#blog_text{
padding: 20px;
}
.content {
    margin: 0 auto;
    padding-top: 30px;
    max-width: 1100px;
}
.footer {
    color: #ffffff;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 20px;
    background-color: #9e9e9e;
    text-align: center;
}

body{
	background-color:#00FFFF;
	background: url('https://images4.alphacoders.com/307/thumb-1920-30716.jpg') ;
	-webkit-background-size: cover;
-moz-background-size: cover;

	
}
</style>
  
</head>
<header>
	<nav class="fixed-top nav navul nav ul:after nav ul li nav ul li:hover nav ul li:hover a nav ul li a nav ul ul nav ul ul li nav ul ul li a nav ul ul li a:hover nav ul ul ul">
	
<ul>
<li><a  href = "<?php echo base_url()?>tampiladminku/home"  rel='stylesheet' type='text/css'>HOME</a></li>
	
	<li> <a  href = "<?php echo base_url()?>tampiladminku/datapemesan"  rel='stylesheet' type='text/css'>DATA PEMESAN</a></li>
		
		<li><a  href = "<?php echo base_url()?>inputadmin/index"  rel='stylesheet' type='text/css'>BARANG</a></li>
		
		<li><a  href = "<?php echo base_url()?>contactku/index"  rel='stylesheet' type='text/css'>HUBUNGI</a></li>
		
		<li><a  href = "<?php echo base_url()?>loginku/index"  rel='stylesheet' type='text/css'>LOGIN</a></li>
		<li><a  href = "<?php echo base_url()?>kurirku/index"  rel='stylesheet' type='text/css'>KURIR</a></li>		
		</ul>
 </nav>
</header>
<body>
<div class="content">
<form action="<?php echo base_url('loginku/cek_login'); ?>" method="post">
  <div class="cont">
  <div class="demo">
    <div class="login">
      <div class="login__check"></div>
      <div class="login__form">
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
		  <tr><td>
          <input type="text" class="login__input name" name="username" maxlength="15" placeholder="Username"/></td></tr>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
		  <tr><td>
          <input type="password" class="login__input pass" name="password" maxlength="20" placeholder="Password"/></td></tr>
        </div>
		<tr><td>
        <button type="submit" class="login__submit">Sign in</button></td></tr>
        <p class="login__signup">Don't have an account? &nbsp;<a>Sign up</a></p>
      </div>
    </div>
    <div class="app">
      <div class="app__top">
        <div class="app__menu-btn">
          <span></span>
        </div>
        <svg class="app__icon search svg-icon" viewBox="0 0 20 20">
          <!-- yeap, its purely hardcoded numbers straight from the head :D (same for svg above) -->
          <path d="M20,20 15.36,15.36 a9,9 0 0,1 -12.72,-12.72 a 9,9 0 0,1 12.72,12.72" />
        </svg>
        <p class="app__hello">Good Morning!</p>
        <div class="app__user">
          <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg" alt="" class="app__user-photo" />
          <span class="app__user-notif">3</span>
        </div>
        <div class="app__month">
          <span class="app__month-btn left"></span>
          <p class="app__month-name">March</p>
          <span class="app__month-btn right"></span>
        </div>
      </div>
      <div class="app__bot">
        <div class="app__days">
          <div class="app__day weekday">Sun</div>
          <div class="app__day weekday">Mon</div>
          <div class="app__day weekday">Tue</div>
          <div class="app__day weekday">Wed</div>
          <div class="app__day weekday">Thu</div>
          <div class="app__day weekday">Fri</div>
          <div class="app__day weekday">Sad</div>
          <div class="app__day date">8</div>
          <div class="app__day date">9</div>
          <div class="app__day date">10</div>
          <div class="app__day date">11</div>
          <div class="app__day date">12</div>
          <div class="app__day date">13</div>
          <div class="app__day date">14</div>
        </div>
        <div class="app__meetings">
          <div class="app__meeting">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-80_5.jpg" alt="" class="app__meeting-photo" />
            <p class="app__meeting-name">Feed the cat</p>
            <p class="app__meeting-info">
              <span class="app__meeting-time">8 - 10am</span>
              <span class="app__meeting-place">Real-life</span>
            </p>
          </div>
          <div class="app__meeting">
            <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg" alt="" class="app__meeting-photo" />
            <p class="app__meeting-name">Feed the cat!</p>
            <p class="app__meeting-info">
              <span class="app__meeting-time">1 - 3pm</span>
              <span class="app__meeting-place">Real-life</span>
            </p>
          </div>
          <div class="app__meeting">
            <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg" alt="" class="app__meeting-photo" />
            <p class="app__meeting-name">FEED THIS CAT ALREADY!!!</p>
            <p class="app__meeting-info">
              <span class="app__meeting-time">This button is just for demo ></span>
            </p>
          </div>
        </div>
      </div>
      <div class="app__logout">
        <svg class="app__logout-icon svg-icon" viewBox="0 0 20 20">
          <path d="M6,3 a8,8 0 1,0 8,0 M10,0 10,12"/>
        </svg>
      </div>
    </div>
  </div>
</div>

</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  



</div>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
         <div id="footer_bottom" class="footer-bottom footer">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="copyright">2014 © <a href="#">FormGet.com</a> All rights reserved.</div>
</div>
</div>
</div>
      </footer>
</html>
