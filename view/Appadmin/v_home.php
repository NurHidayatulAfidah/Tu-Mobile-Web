<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
		<title>Home</title>
		
		<style type="text/css" >
		*, *:before, *:after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
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
body{
	background-color:#00FFFF;
	background: url('galon.jpg');
	
}
nav ul {
	background: #0099ff; 
padding:13px 28.5px;
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
			display: block; padding: 0.7px 45px;
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
		.content {
    margin: 0 auto;
    padding-top: 30px;
    max-width: 1100px;
}
.footer {
    color: #ffffff;
    position: relative;
	top:138px;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 20px;
    background-color: #0e639d;
    text-align: center;
}
body{
	background-color:#00FFFF;
	background: url('https://1.bp.blogspot.com/-WAFLgYYVuzs/V-r5W-CgF6I/AAAAAAAAAyg/AvPNQgkHlYk0itTZh-quKb9cw_yB7w2-QCLcB/s1600/Subhanallah%2521%2521%2521%2BTernyata%2BAir%2BMemiliki%2BKeajaiban.jpg') ;
	-webkit-background-size: cover;
-moz-background-size: cover;

	
}

</style>
	</head>
	<body >
	
	<nav class="fixed-top nav navul nav ul:after nav ul li nav ul li:hover nav ul li:hover a nav ul li a nav ul ul nav ul ul li nav ul ul li a nav ul ul li a:hover nav ul ul ul">
	<ul>
		<li><a  href = "<?php echo base_url()?>loginku/mhome"  rel='stylesheet' type='text/css'>HOME</a></li>
		<li><a  href = "<?php echo base_url()?>inputadmin/index"  rel='stylesheet' type='text/css'>BARANG</a></li>
		<li><a  href = "<?php echo base_url()?>supplierku/index"  rel='stylesheet' type='text/css'>SUPPLIER</a></li>
		<li><a  href = "<?php echo base_url()?>kurirku/index"  rel='stylesheet' type='text/css'>KURIR</a></li>	
		<li> <a  href = "<?php echo base_url()?>tampiladminku/datapemesan"  rel='stylesheet' type='text/css'>PEMESANAN</a></li>	
		<li> <a  href = "<?php echo base_url()?>pengirimku/index"  rel='stylesheet' type='text/css'>PENGIRIMAN</a></li>	
		<li><a href="#"><?php echo $this->session->userdata("nama"); ?><a></li>	
		<li><a href="<?php echo base_url()?>loginku/logout">LOG OUT</a><li>
	</ul>
	</nav>
	<div class="content">
    <section>
		<h1>SCR adalah sebuah depo air mineral yang berada di Jln.Sumatra 111,Jember</h1>
		<hr></hr>
		<br><br><br>
		<div id="content" class="left-align contact-page">
		<div class="line">
            <div class="margin">
                <div class="s-12 l-6">
					<h2>Keunggulan yang dimiliki depo SCR air mineral dan LPG SCR :</h2>
					<ol><br>
						<li><b> Kualitas air mineral di Depo SCR baik itu isi ulang maupun air mineral kemasan kualitasnya terjamin dan air mineralnya berasal dari supplier yang terpercaya.</b></li><br>
						<li><b> Harga air mineral dan LPG di Depo SCR terjangkau cocok untuk semua kalangan, baik keluarga maupun mahasiswa</b></li><br>
						<li><b>Pemesanan air mineral dan LPG di Depo SCR sangat mudah, dengan pelayanan yang mudah yaitu pesan antar dengan estimasi waktu antar barang</b></li><br>
					 </ol><br/>
                </div>
			</div>
        </div>
		</div>
		<div class="line">
            <div class="margin">
                <div class="s-12 l-6">
					<h3> HUBUNGI DEPO AIR MINERAL DAN LPG SCR :</h3>
					<hr></hr>
                    <address>
						<p><i class="icon-home icon"></i> jln.Sumatra 111 ,Jember</p>
                        <p><i class="icon-globe_black icon"></i> 085648156995 </p>
                    </address><br/>
                </div>
            </div>
		</div>
    </section>
	</div>
	
    <!-- FOOTER -->   
    <footer>
		<div id="footer_bottom" class="footer-bottom footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="copyright">2014 © <a href="#">FormGet.com</a> All rights reserved.</div>
					</div>
				</div>
			</div>
		</div>
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script> 
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>   
    <script type="text/javascript">
        jQuery(document).ready(function($) {
			$("#owl-demo2").owlCarousel({
           	slideSpeed : 300,
           	autoPlay : true,
           	navigation : false,
           	pagination : true,
           	singleItem:true
           });
        });	  
    </script>  
	</body>
</html>