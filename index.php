<?php 
include 'config.php'; 
$bombomtank = "";
$darkadia = "";
$osmanli = "";
$adalet = '';
$bombomtank = file_get_contents('https://bombomtank.com/req/serverlist.aspx?id=4');
$mintank = file_get_contents('https://bombom.club/quest-famenad-s1/serverlist.aspx?id=1');
$bombia = file_get_contents('https://game.bombia.net:6807/request/serverlist.aspx?id=1');


?>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="ishortcut icon" href="assets/img/icon.png">
    <title>Bombom Pvp - Bombom Pvp Serverlar</title>
	<meta name="description" content="Bombompvp.com bütün bombom pvp serverlarını bir araya toplayan bir web sitesidir.Yeni açılacak bombom serverlarını da burada görebilirsiniz.">
    <meta property="og:url" content="https://bombompvp.com/" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Bombom Private Server Listesi" />
<meta property="og:description" content="Türkiye'de bulunan tüm bombom pvp sunucularına buradan erişebilirsiniz. Ayrıca yakında açılacak olan bombom pvp sunucularını sitemizden görebilirsiniz." />
<meta property="og:image" content="../bombompvp.com/og.html" />
<meta name="google-site-verification" content="auzEvsIyKOj-CGgr-_7AiEFFZ8Z3yf1slBkZjNeP-j4" />  
  <link rel="stylesheet" href="assets/css/fox-f.css" rel="stylesheet">
    <script src="https://famenad.com/337/foxx.js"></script>
  <link href="assets/plugins/css/plugins.css" rel="stylesheet" >	
    
    <!-- Custom style -->
    <link href="assets/css/style_newss.css" rel="stylesheet">
	<link href="assets/css/responsiveness.css" rel="stylesheet">
	<link  type="text/css" rel="stylesheet" id="jssDefault" href="assets/css/colors/main.css">

  <script  src='../www.google.com/recaptcha/api.js'></script>
<script >
function submitForm() {
    document.getElementById('userForm').submit();
}
</script>
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
		<script>
 
            opts = ({
               position:'place_top_center',
               css:'light',
               timeOut:52000,
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
		<div class="wrapper">     
			<!-- Start Navigation -->
			<nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav">
				<div class="container-fluid">         
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="ti-align-left"></i>
					</button>
					
					<!-- Start Header Navigation -->
					<div class="navbar-header">
						<a class="navbar-brand" href="https://bombompvp.com/">
							<img src="../assets/img/logo-white.png" class="logo logo-display" alt="">
							<img src="../assets/img/logo.png" class="logo logo-scrolled" alt="">
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
							<li class="dropdown">
								<a href="https://forum.bombompvp.com/"><font color="#ffe60b">Forum </font></a>
							</li>	
													</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>   
			</nav>
						<!-- End Navigation -->
			<div class="clearfix"></div>		
			<!-- Listings Section -->
			<section class="sec-bt" id="listing">
				<div class="container">
				
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
						<div class="heading">
							<h2>Bombom Pvp  <span>Serverlar Listesi </span></h2>
							<p>Türkiye'de bulunan tüm <b><font color="#eef8fa">Bombom Pvp Serverları </font></b>sitemizden bulabilirsiniz.</p>
							<h4>Toplam Online: <span style="color:yellow;"><?php echo $mintank+$adalet+$bombomtank+$darkadia+$osmanli;?></span> </h4>
													</div>
						</div>
					</div>
				
					<div class="row">
		<?php 
		$query = $baglanti->query("select * from servers order by ID asc LIMIT 9");
		foreach($query as $value)
		{
		$id = $value['ID'];
   		$name = $value['S_Name'];
   		$date = $value['S_Date'];
    	$version = $value['S_Version'];
    	$address = $value['S_Address'];
		$type = $value['S_Type'];
		$status = $value['S_Status'];
		$status_color;
		$online;
		$server_type;
		$rel;
		$facebook = $value['Facebook'];
		$instagram= $value['Instagram'];
		$discord = $value['Discord'];
			if($status == 'Aktif')
			{
				$status_color = 'badge bg-d';
			}
			if($status == 'Hazırlanıyor')
			{
				$status_color = 'badge bg-y';
			}
			if($status == 'Offline')
			{
				$status_color = 'badge bg-l';
			}
			if($address == 'https://bombom.club/')
			{
				$online = $mintank;
				$id = "bombompvpcomv3";
			}
				else if($address == 'http://adaletank.com/')
			{
				$online = $adalet;
			}
				else if($address == 'https://bombomtank.com/')
			{
				$online = $bombomtank;			
			}
			else if($address == "https://bombia.net/")
			{
				$online = $bombia;
			}
			else if(strpos($address,"vitotank"))
			{
				$online = '';
			}
			else if(strpos($address,"darkadia"))
			{
				$online = $darkadia;
			}
			else if(strpos($address,"osmanli"))
			{
				$online = $osmanli;
			}
			else if(strpos($address,"risegames"))
			{
				$online = '';
			}
			else {
				$online = '0';
			}
			if($address == "https://bombom.club/")
			{
				$rel = "rel='dofollow'";
			}
			else 
			{
				$rel = "rel='nofollow'";
			}
			if($address != "https://bombia.net/")
			{
									echo '<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property_item classical-list">
								<div class="image">
									<a href="'.$address.'" target="_blank" '.$rel.' class="listing-thumb">
										<img src="assets/img/pvp/'.$id.'.jpg" alt="'.$name.'" class="img-responsive" width="100%">
									</a>
									<div class="listing-price-info"> 
										<span class="pricetag">'.$online.' Online</span>
									</div>
									<span class="list-rate good">'.$version.'</span>									
								</div>
								
								<div class="proerty_content">
							<div class="author-avater">
										<img src="assets/img/pvp/profil/'.$id.'.jpg" class="author-avater-img" alt="'.$name.'">
									</div>
									<div class="proerty_text">
									  <h3 class="captlize">'.$name.'</h3>
									</div>
									<p class="property_add">'.$date.'</p>
									<center><a href="'.$facebook.'" target="_blank"><img src="assets/img/pvp/social/facebook.png" width="29px" height="29px"></a>
									<a href="'.$instagram.'" target="_blank"><img src="assets/img/pvp/social/instagram.png" width="29px" height="29px"></a>
									<a href="'.$discord.'" target="_blank"><img src="assets/img/pvp/social/discord_news.png" width="29px" height="29px"></a></center>
									<div class="property_meta"> 
									  <div class="list-fx-features">
										<a href="'.$address.'" rel="nofollow" target="_blank" class="btn reservation btn-radius theme-btn full-width">Oyuna Gir</a>
										</div>  
									</div>
								</div>
								
								<div class="listing-footer-info">
								<div class="listing-cat">
										<span class="badge bg-g"><font color="#fffff">Server Tipi: <b>'.$type.'</b></font></span>

									</div>
									<span class="'.$status_color.'"><font color="white">Durum: <b>'.$status.'</b></font></span>
								</div>
								
							</div>
						</div>'; }} ?></div>
					
				</div>
			</section>
			<!-- End Listings Section -->		
			<!-- ================ Start Footer ======================= -->
			<footer class="footer image-bg" id="footer">
				<div class="container">
					<div class="row">
					
						<div class="col-md-3 col-sm-6">
							<div class="footer-widget">
								<h3  class="widgettitle widget-title" name="hakkimizda">Hakkımızda</h3>
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
									<li><a href="#">Bombom Club</a></li>
									<li><a href="#">Osmanlıtank</a></li>
									<li><a href="#">Adalettank</a></li>
									<li><a href="#">Bombom Tank</a></li>
									<li><a href="#">Darkadia</a></li>
							</div>
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
			</footer>			<!-- ================ End Footer Section ======================= -->
			
			<!-- START JAVASCRIPT -->
			<script data-cfasync="false"  src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script>
			<script  src="assets/js/jquery.min.js"></script>
			<script  src="assets/plugins/js/bootstrap.min.js"></script>
			<script  src="assets/plugins/js/bootsnav.js"></script>
			<script  src="assets/plugins/js/bootstrap-select.min.js"></script>
			<script  src="assets/plugins/js/bootstrap-touch-slider-min.js"></script>
			<script  src="assets/plugins/js/jquery.touchSwipe.min.js"></script>
			<script  src="assets/plugins/js/chosen.jquery.js"></script>
			<script  src="assets/plugins/js/datedropper.min.js"></script>
			<script  src="assets/plugins/js/dropzone.js"></script>
			<script  src="assets/plugins/js/jquery.counterup.min.js"></script>
			<script  src="assets/plugins/js/jquery.fancybox.js"></script>
			<script  src="assets/plugins/js/jquery.nice-select.js"></script>
			<script  src="assets/plugins/js/jqueryadd-count.js"></script>
			<script  src="assets/plugins/js/jquery-rating.js"></script>
			<script  src="assets/plugins/js/slick.js"></script>
			<script  src="assets/plugins/js/timedropper.js"></script>
			<script  src="assets/plugins/js/waypoints.min.js"></script>
<script  async src="https://www.googletagmanager.com/gtag/js?id=UA-160615203-1"></script>
<script >
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-160615203-1');
</script>


			<script  src="assets/js/jQuery.style.switcher.js"></script>
			
			<!-- Custom Js -->
			<script   src="assets/js/custom.js"></script>
			
			<script >
				function openRightMenu() {
					document.getElementById("rightMenu").style.display = "block";
				}
				function closeRightMenu() {
					document.getElementById("rightMenu").style.display = "none";
				}
			</script>
			
			
			
		</div>
	</body>

</html>