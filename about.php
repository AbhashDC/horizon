<!DOCTYPE HTML>
<?php include_once('inc_DisplayClass.php');
$display->pageCounter(); ?>
<html>
<head>
	<link rel='SHORTCUT ICON' href='gallery/logo/favicon.ico' type='image/x-icon' />
<title>About</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!------ light-box-script ----->
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript" charset="utf-8">
	$(function() {
		$('.about-grid a').Chocolat({linkImages:false});
	});
</script>
<!------ light-box-script ----->
</head>
<body>
	<div class="header-home">

								<?php $display->showHeaders(); ?>
					</ul>
				<!-- script-nav -->
			<script>
			$("span.menu").click(function(){
				$(".top-nav ul").slideToggle(500, function(){
				});
			});
			</script>
			<!-- //script-nav -->
		</div>
		</div>
        <!--script-->
		<script>
			$(document).ready(function(){
				$(".top-nav li a").click(function(){
					$(this).parent().addClass("active");
					$(this).parent().siblings().removeClass("active");
				});
			});
		</script>
			<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-home").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop();
				if(scrollpos >=navoffeset){
					$(".header-home").addClass("fixed");
				}else{
					$(".header-home").removeClass("fixed");
				}
			 });

		});
		</script>
		<!-- /script-for sticky-nav -->
	<!--//header-->
	<div class="grid_1">
	   <div class="container">
		  <div class="box_1">
			<h3>Who we are</h3>
		  </div>
		  <div class="col-md-12 about_banner"><?php $display->getImage(); ?></div>
		  <div class="box_20">
				<?php $display-> aboutinfo(); ?>

		      <div class="clearfix"> </div>
		  </div>
	   </div>
	</div>
	<div class="grid_3">
		<div class="container">
			<h3>Our Staff</h3>
		  <div
					<?php $display->displayFullTeam(); ?>

				        <div class="clearfix"> </div>
	      </div>
	   </div>
	</div>

<?php include('footer.php') ?>
</body>
</html>
