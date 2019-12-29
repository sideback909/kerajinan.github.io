<?php
require_once ("../konek.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>kerajinan.co</title>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../css/style2.css" rel="stylesheet" type="text/css">
<link href="../css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="../css/responsive.css" rel="stylesheet" type="text/css">
<link href="../css/base.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/animate.css" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="../js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.isotope.js"></script>
<script type="text/javascript" src="../js/wow.js"></script>
<script type="text/javascript" src="../js/classie.js"></script>
</head>
<body>

<nav class="main-nav-outer2 navbar " id="test"><!--main-nav-start-->
	<a class="navbar-brand" href="../index">
      <img style="width: 155px; height: 35px;" src="../foto/logo_rumah_kreatif.png"  alt="">
    </a>
    <ul class="main-nav2">
      <li ><input type="search" placeholder="Search" aria-label="Search"></li>
			<li><a href="../kerajinanmap">Pengrajin Terdekat</a></li>
			<li><a  href="../login">Login</a></li>
		</ul>
		<a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
</nav><!--main-nav-end-->
<!-- /.section product -->
<section>
<?php
    $id = $_REQUEST['id'];
    $idkat = $_REQUEST['idkat'];
    $query = mysqli_query($conn, "SELECT * FROM produk WHERE id='$id'");
    $querys = mysqli_query($conn, "SELECT * FROM kategori WHERE id='$idkat'");
    $records = mysqli_fetch_array($querys);
    if ($record = mysqli_fetch_array($query)) {
?>
<div class="container marketing">
      <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
      <div style="margin:20px;">
      <h1 class="title">Detail produk</h1>
      <hr>
      </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <img src="../<?php echo $record['foto'];?>" alt="<?php echo $record['nama_prod'];?>" class="img-responsive">
          </a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <h4><?php echo $record['nama_prod'];?></h4>
          <h3>Rp. <?php echo number_format($record['harga']);?></h3>
          <br>
          <h5>Kategori : <?php echo $records['nama_kat'];?></h5>
          <?php
          if($record['jumlah_prod'] > 0){
              ?>
          <h5>Stok : <?php echo $record['jumlah_prod'] ?></h5>
          <br>
          <p><a class="btn btn-primary" href="../cart?id= <?php echo $record['id']; ?> &action=add"><i class="fa fa-shopping-cart"></i> Add to Shopping Bag</a></p>
          <?php
          }else{
          ?>
          <h5>Stok : Habis</h5>
          <?php
          }
          ?>
          </div><!-- /.col-lg-4 col-md-6 col-sm-6 col-xs-6-->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div style="margin:20px;">
      <h1 class="title">Deskripsi produk</h1>
      <hr></hr>
      </div>
      <p><?php echo nl2br($record['deskripsi']);?></p>

      </div>
      </div>
      </div><!-- /.row -->
</div>
<?php
}
?>
</section>

<!-- Footer ================================================================== -->
<div  id="footerSection">
	<div class="container">
		<div class="row">
			<div class="span3">
				<h5>ACCOUNT</h5>
				<a href="login.html">YOUR ACCOUNT</a>
				<a href="login.html">PERSONAL INFORMATION</a> 
				<a href="login.html">ADDRESSES</a> 
				<a href="login.html">DISCOUNT</a>  
				<a href="login.html">ORDER HISTORY</a>
			 </div>
			<div class="span3">
				<h5>INFORMATION</h5>
				<a href="contact.html">CONTACT</a>  
				<a href="register.html">REGISTRATION</a>  
				<a href="legal_notice.html">LEGAL NOTICE</a>  
				<a href="tac.html">TERMS AND CONDITIONS</a> 
				<a href="faq.html">FAQ</a>
			 </div>
			<div class="span3">
				<h5>OUR OFFERS</h5>
				<a href="#">NEW PRODUCTS</a> 
				<a href="#">TOP SELLERS</a>  
				<a href="special_offer.html">SPECIAL OFFERS</a>  
				<a href="#">MANUFACTURERS</a> 
				<a href="#">SUPPLIERS</a> 
			 </div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="#"><img width="60" height="60" src="foto/sponsor/facebook.png" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="foto/sponsor/twitter.png" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="foto/sponsor/youtube.png" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy; Bootshop</p>
	</div><!-- Container End -->
	</div>

<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
  </script>


<script type="text/javascript">
	$(window).load(function(){
		
		$('.main-nav li a').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	})
</script>

<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
  
});


</script>

<!-- iki akordion -->
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + 'px';
    } 
  }
}
</script>
</body>
</html>