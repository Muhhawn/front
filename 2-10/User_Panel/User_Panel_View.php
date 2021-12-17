

<html lang = "fa">
<head>
    <title>پنل کاربری</title>
    <meta name="description" content="User_Panel" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../assets/css/Panel-style.css">
    <link href="../assets/images/shortcat.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/fonts/all.css">
	  
</head>


<body>
	
	 <!-- header -->
	
<header>
	
	    <img src="../assets/images/User_Panel-logo.jpg" alt="User_Panel" class="banner-catalog" title="User_Panel"  >
	
	
	 <!-- navigate bar -->

	  <nav>
	  <span class="hidden-nave-mini">	  
	<?php

  include '../templates/topnavigate-mini-User_Panel.php';
		  ?>
	  </span> 
	  </nav>
	
		  
	</header>
	
	 <!-- section -->

	<section>
	
 <!-- article -->

	 <article>
 
  <!-- Dashboard -->
		 
 <p class="home_text_counter">داشبورد پنل کاربری</p>
 <div class="home_counter_grid">
 <div class="home_counter">
<i class="fas fa-trophy"></i>
 <br>
 <span class="span_counter">435 روز</span>
 <br>
 <span>سابقه عضویت شما</span>
  </div>
			
  <div class="home_counter">
 <i class="fas fa-comment"></i>
  <br>
  <span class="span_counter">6 نظر</span>
  <br>
  <span>نظرات شما</span>
  </div>

  <div class="home_counter">
 <i class="far fa-file"></i>
  <br>
  <span class="span_counter">22 فایل</span>
  <br>
  <span>فایل های خریداری شده</span>
  </div>
			
  <div class="home_counter">
<i class="fas fa-shopping-cart"></i>
  <br>
  <span class="span_counter">35 خرید</span>
  <br>
  <span>تعداد خرید شما</span>
  </div>
  </div>

</div>
		
<br>			
<div class="home_counter">
<i class="fas fa-shopping-cart"></i>
  <br>
  <span class="span_counter">@Moshtari</span>
  <br>
  <span>کد تخفیف برای خرید بعدی شما</span>
  </div>
  </div>

</div> 
	
</article>
</section>
	
 <!-- aside --> 
	
  <aside>
	  
 <?php
   include '../templates/User_Panel.php';
?>
	 
 </aside>
  
	 <!-- footer --> 
<footer>
	 <?php
   include '../templates/footer.php';
?>
</footer>

 <div class="goup">

 <a href="#top">
برو بالا 
 <br>
 <i class="fas fa-chevron-up"></i>
 </a>
 </div>

 <script src="../assets/js/main.js"></script>
 <script data-cfasync="false" type="text/javascript" src="../assets/js/jquery.min.js"></script>
 <script data-cfasync="false" type="text/javascript" src="../assets/js/nav.js"></script>
	
</body>
</html>
 