<!DOCTYPE html>
<html class="no-js" lang="en">
	
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="ishortcut icon" href="https://i.hizliresim.com/dw5jLO.png">
    <title>Bombom Pvp - Bombom Pvp Serverlar</title>
	<meta name="description" content="Bombompvp.com bütün bombom pvp serverlarını bir araya toplayan bir web sitesidir.Yeni açılacak bombom serverlarını da burada görebilirsiniz.">
  <link rel="stylesheet" href="../assets/css/fox-f.css" rel="stylesheet">
    <script src="https://famenad.com/337/foxx.js"></script>
    <!-- All plugins -->
    <link href="../assets/plugins/css/plugins.css" rel="stylesheet">	
    
    <!-- Custom style -->
    <link href="../assets/css/style_newss.css" rel="stylesheet">
	<link href="../assets/css/responsiveness.css" rel="stylesheet">
	<link  type="text/css" rel="stylesheet" id="jssDefault" href="../assets/css/colors/main.css">
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2341613642798956');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2341613642798956&ev=PageView&noscript=1"
/></noscript>

<!-- End Facebook Pixel Code -->


	</head>
	<body class="home-2">
		<div class="wrapper">  
				<nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav on menu-center no-full">
				<div class="container-fluid">         
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="ti-align-left"></i>
					</button>
					
					<!-- Start Header Navigation -->
					<div class="navbar-header">
						<a class="navbar-brand" href="https://bombompvp.com/">
							<img src="../assets/logo-white.png" class="logo logo-display" alt="">
							<img src="../assets/logo.png" class="logo logo-scrolled" alt="">
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbar-menu">
						<ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
							<li class="dropdown">
								<a href="https://bombompvp.com/">Anasayfa </a>								
							</li>
							<li class="dropdown">
								<a href="https://bombompvp.com/337">Bombom TR </a>
							</li>
							<li class="dropdown">
								<a href="#footer">Hakkımızda </a>
							</li>
							<li class="dropdown">
								<a href="https://forum.bombompvp.com/"><font color="#ffe60b">Forum </font></a>
							</li>	
							</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>   
			</nav>
<?php 
$s1 = file_get_contents('http://quest2.ddt.tr.elexddt.com/serverlist.aspx?id=1');
$s2 = file_get_contents('http://quest28.ddt.tr.elexddt.com/serverlist.aspx?id=1');
$s3 = file_get_contents('http://quest210.ddt.tr.elexddt.com/serverlist.aspx?id=1');
$s4 = file_get_contents('http://quest220.ddt.tr.elexddt.com/ServerList.aspx?id=1');
			
$s1 = floor($s1/2);
$top = $s1 + $s2 + $s3 + $s4;	
if(empty($s1))
{
	$veri1 = "Offline";
	$color1 = "#ff431e";
}
else{
	$veri1 = "Toplam: ".($s1*2)." Oyuncu: ".$s1." Bot: ";
	$color1 = "#ff3a72";
}
if(empty($s2))
{
	$veri2 = "Offline";
	$color2 = "#ff431e";
}
else{
	$veri2 = "Online: ";
	$color2 = "#37b475";
}		
		
if(empty($s3))
{
	$veri3 = "Offline";
	$color3 = "#ff431e";
}
else{
	$veri3 = "Online: ";
	$color3 = "#37b475";
}

if(empty($s4))
{
	$veri4 = "Offline";
	$color4 = "#ff431e";
}
else{
	$veri4 = "Online: ";
	$color4 = "#37b475";
}
?> <script>
 
            opts = ({
               position:'place_top_center',
               css:'light',
               timeOut:1,
               animateIn:'fx_animate_slideInRight',
               animateOut:'fx_animate_slideOutRight',
               delay:000,
               dismiss:false
            })
       
      fx.toast.success({
           title:'',
           body:'<a href="https://s2.bombom.club"><img src="https://bombompvp.com/assets/img/s2-club.jpg"></a>',
          opt:opts
      })    
   

    
        
     
    </script>
			<div class="clearfix"></div>

			<section class="list-detail">
				<div class="container">
					<div class="row">
						<!-- Start: Listing Detail Wrapper -->
						<div class="col-md-12 col-sm-6">

							<div class="widget-boxed">
									<div class="widget-boxed-header">
										<h4><i></i> <img src="../assets/icons8-turkey-48.png" width="34px" height="34px"> Bombom 337 (TR) Toplam Online: <?php echo $top; ?></h4>
									</div>
									<div class="widget-boxed-body padd-top-10 padd-bot-0">
										<div class="side-list">
											<ul class="category-list">
											<li><a href="#"  style="font-size:16px;">S(1-26):Sihirler Şehri <span class="badge bg-d" style="font-size:16px; background-color:<?php echo $color1; ?>;"><?php echo $veri1; ?> <?php echo $s1; ?> </span></a></li>
											<li><a href="#"  style="font-size:16px;">S(27-154):Lale devri <span class="badge bg-d" style="font-size:16px; background-color:<?php echo $color2; ?>;"><?php echo $veri2; ?>  <?php echo $s2; ?> </span></a></li>
											<li><a href="#"  style="font-size:16px;">S(155-217):Kristal Diyarı <span class="badge bg-d" style="font-size:16px; background-color:<?php echo $color3; ?>;"><?php echo $veri3; ?> <?php echo $s3; ?></span></a></li>
											<li><a href="#"  style="font-size:16px;">S(218-222):2021-Mutluluk <span class="badge bg-d" style="font-size:16px; background-color:<?php echo $color4; ?>;"><?php echo $veri4; ?> <?php echo $s4; ?></span></a></li>
										
											</ul>
										</div>
									</div>
								</div>
							

						</div>
	<?php
$s1_br = file_get_contents('http://quest2-ddt.337.com/serverlist.aspx?id=1');
$s2_br = file_get_contents('http://quest7-ddt.337.com/serverlist.aspx?id=1');
$s3_br = file_get_contents('http://quest9-ddt.337.com/serverlist.aspx?id=1');
$s4_br = file_get_contents('http://quest20-ddt.337.com/serverlist.aspx?id=1');
$s5_br = file_get_contents('http://quest70-ddt.337.com/serverlist.aspx?id=1');
$s6_br = file_get_contents('http://quest132-ddt.337.com//serverlist.aspx?id=1');
$s7_br = file_get_contents('http://quest275-ddt.337.com//serverlist.aspx?id=1');
$s8_br = file_get_contents('http://quest362-ddt.337.com//serverlist.aspx?id=1');						
$s9_br = file_get_contents('http://quest372-ddt.337.com/serverlist.aspx?id=1');
$s10_br = file_get_contents('http://quest376-ddt.337.com/serverlist.aspx?id=1');
$s11_br = file_get_contents('http://quest377-ddt.337.com/serverlist.aspx?id=1');
$s12_br = file_get_contents('http://quest378-ddt.337.com/serverlist.aspx?id=1');
	$total = $s1_br + $s2_br + $s3_br + $s4_br + $s5_br + $s6_br + $s7_br + $s8_br + $s9_br +  $s10_br + $s11_br + $s12_br; 					
						
						?>					
						<div class="col-md-12 col-sm-6">

							<div class="widget-boxed">
									<div class="widget-boxed-header">
										<h4><i></i> <img src="../assets/brazil-circular.png" width="34px" height="34px"> DDTank 337 (BR) Toplam Online: <?php echo $total; ?><span style="font-size:14px; color:#ff3a72;"> Bombom 337 (TR) Senaryosu ~~ 5 sene önce... </span></h4>
									</div>
									<div class="widget-boxed-body padd-top-10 padd-bot-0">
										<div class="side-list">
											<ul class="category-list">
											<li><a href="#"  style="font-size:16px;">S(1-3):Ilha dos valentões<span class="badge bg-d" style="font-size:16px;">Online: <?php echo $s1_br; ?></span></a></li>
											<li><a href="#"  style="font-size:16px;">S(4-8,11):Vale dos Ouriços<span class="badge bg-d" style="font-size:16px;">Online: <?php echo $s2_br; ?></span></a></li>
											<li><a href="#"  style="font-size:16px;">S(9-10,12-19,UOL):Mundo da Paixão<span class="badge bg-d" style="font-size:16px;">Online: <?php echo $s3_br; ?></span></a></li>
											<li><a href="#"  style="font-size:16px;">S(20-46):Deserto-das-Almas<span class="badge bg-d" style="font-size:16px;">Online: <?php echo $s4_br; ?></span></a></li>
											<li><a href="#"  style="font-size:16px;">S(47-131):Jogos Olímpicos<span class="badge bg-d" style="font-size:16px;">Online: <?php echo $s5_br; ?></span></a></li>
											<li><a href="#"  style="font-size:16px;">S(132-245):Lugares escuros<span class="badge bg-d" style="font-size:16px;">Online: <?php echo $s6_br; ?></span></a></li>
											<li><a href="#"  style="font-size:16px;">S(246-361):Jóia infinita<span class="badge bg-d" style="font-size:16px;">Online: <?php echo $s7_br; ?></span></a></li>
											<li><a href="#"  style="font-size:16px;">S(362-371):Juntos há 9 anos<span class="badge bg-d" style="font-size:16px;">Online: <?php echo $s8_br; ?></span></a></li>
											<li><a href="#"  style="font-size:16px;">S(372-375):Terras Góticas<span class="badge bg-d" style="font-size:16px;">Online: <?php echo $s9_br; ?></span></a></li>
											<li><a href="#"  style="font-size:16px;">S376:Retorno das Lendas<span class="badge bg-d" style="font-size:16px;">Online: <?php echo $s10_br; ?></span></a></li>
											<li><a href="#"  style="font-size:16px;">S377:Valhala<span class="badge bg-d" style="font-size:16px;">Online: <?php echo $s11_br; ?></span></a></li>
											<li><a href="#"  style="font-size:16px;">S378:Domínios de Boguo<span class="badge bg-d" style="font-size:16px;">Online: <?php echo $s12_br; ?></span></a></li>
											
										
											</ul>
										</div>
									</div>
								</div>
							

						</div>
				
					</div>
				</div>
			</section>
			<footer class="footer image-bg" id="footer">
				<div class="container">
					<div class="row">
					
						<div class="col-md-3 col-sm-6">
							<div class="footer-widget">
								<h3 class="widgettitle widget-title" name="hakkimizda">Hakkımızda</h3>
								<p>Bombompvp.com tüm bombom pvp serverlarını tek çatı altından ulaşılabilinmesi için açılmış bir sitedir.</p>
								<a href="#" class="other-store-link">
									<div class="other-store-app">
										<div class="os-app-icon">
											<i class="ti-android"></i>
										</div>
										<div class="os-app-caps">
											Google Store
										</div>
									</div>
								</a>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6">
							<div class="footer-widget">
								<h3 class="widgettitle widget-title">Popüler Serverlar</h3>
								<ul class="footer-navigation sinlge">
									<li><a href="#">UTD Games</a></li>
									<li><a href="#">Adalet Tank</a></li>
									<li><a href="#">Lord Games</a></li>
									<li><a href="#">Bombom Tank</a></li>
							</ul></div>
						</div>
						
						<div class="col-md-3 col-sm-6">
							<div class="footer-widget">
								<div class="textwidget">
								<h3 class="widgettitle widget-title">İletişim</h3>
								<div class="address-box">
									<div class="sing-add">
										<i class="ti-location-pin"></i>Türkiye, İstanbul
									</div>
									<div class="sing-add">
										<i class="ti-email"></i>info@bombompvp.com
									</div>
									<div class="sing-add">
										<i class="ti-world"></i>www.bombompvp.com
									</div>
								</div>
								<ul class="footer-social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								</ul>
								</div>
							</div>
						</div>
												<div class="col-md-3 col-sm-6">
							<div class="footer-widget">
								<h3 class="widgettitle widget-title">E-Mail Bülteni</h3>
								<p>E-Mail bültenine katılarak yeni açılan serverlar hakkında bilgiye sahip olabilirsiniz.</p>
								
								<form class="sup-form" method="post">
									<input type="email" class="form-control sigmup-me" name="email" placeholder="E-Mail Adresiniz" required="required">
									<button type="submit" class="btn theme-btn" name="addEmail" value="Get Started"><i class="fa fa-location-arrow"></i></button>
								</form>
							</div>
						</div>
					</div>
					
				</div>
				<div class="footer-copyright">
					<p> <a href="http://famenad.com/" style="color:#59b7f5;">famenad.com</a> Tüm Hakları Saklıdır.</p>
				</div>
			</footer>
		

			<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/plugins/js/bootstrap.min.js"></script>
			<script src="../assets/plugins/js/bootsnav.js"></script>
			<script src="../assets/plugins/js/bootstrap-select.min.js"></script>
			<script src="../assets/plugins/js/bootstrap-touch-slider-min.js"></script>
			<script src="../assets/plugins/js/jquery.touchSwipe.min.js"></script>
			<script src="../assets/plugins/js/chosen.jquery.js"></script>
			<script src="../assets/plugins/js/datedropper.min.js"></script>
			<script src="../assets/plugins/js/dropzone.js"></script>
			<script src="../assets/plugins/js/jquery.counterup.min.js"></script>
			<script src="../assets/plugins/js/jquery.fancybox.js"></script>
			<script src="../assets/plugins/js/jquery.nice-select.js"></script>
			<script src="../assets/plugins/js/jqueryadd-count.js"></script>
			<script src="../assets/plugins/js/jquery-rating.js"></script>
			<script src="../assets/plugins/js/slick.js"></script>
			<script src="../assets/plugins/js/timedropper.js"></script>
			<script src="../assets/plugins/js/waypoints.min.js"></script>
			
			<script src="../assets/js/jQuery.style.switcher.js"></script>
			
			<!-- Custom Js -->
			<script src="../assets/js/custom.js"></script>
			<a id="back2Top" class="theme-bg" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			
			<script>
				function openRightMenu() {
					document.getElementById("rightMenu").style.display = "block";
				}
				function closeRightMenu() {
					document.getElementById("rightMenu").style.display = "none";
				}
			</script>
			
			<script type="text/javascript">
				$(document).ready(function() {
					$('#styleOptions').styleSwitcher();
				});
			</script>
			
			<!-- Google-map -->
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
			<script src="../assets/js/gmap3.min.js"></script>
			<script type="text/javascript">
				$('#map_full_width_one').gmap3({
					map: {
						options: {
							zoom: 5,
							center: [41.785091, -73.968285],
							mapTypeControl: true,
							mapTypeControlOptions: {
								style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
							},
							mapTypeId: "style1",
							mapTypeControlOptions: {
								mapTypeIds: [google.maps.MapTypeId.ROADMAP, "style1"]
							},
							navigationControl: true,
							scrollwheel: false,
							streetViewControl: true
						}
					},
					marker: {
						latLng: [40.785091, -73.968285],
						options: {animation:google.maps.Animation.BOUNCE, icon: 'assets/img/marker.png' }
					},
					styledmaptype: {
						id: "style1",
						options: {
							name: "Style 1"
						},

					}
				});

			</script>
			
			<script type="text/javascript">
				$("[data-fancybox]").fancybox({
					// Options will go here
				});
			</script>
			
			<!-- Date Dropper Script-->
			<script>
				$('#reservation-date').dateDropper();
			</script>
			
			<!-- Time Dropper Script-->
			<script>
				this.$('#reservation-time').timeDropper({
					setCurrentTime: false,
					meridians: true,
					primaryColor: "#e8212a",
					borderColor: "#e8212a",
					minutesInterval: '15'
				});
			</script>
			
			<!-- Rating Script -->
			<script>
				 $('.rating-opt').start(function(cur){
					console.log(cur);
					 $('#info').text(cur);
				});
			</script>

		</div>
	</body>

<!-- Mirrored from codeminifier.com/updated-listing-hub-template/listing-hub/listing-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Mar 2020 22:06:50 GMT -->
</html>