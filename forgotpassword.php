<?php session_start(); print_r($_SESSION); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Electronix Store</title>
<?php require_once("inc/head.php")?>

</head>
<body>
<div id="main_container">
  <div class="top_bar">
    <div class="top_search">
      <div class="search_text"><a href="http://all-free-download.com/free-website-templates/">Advanced Search</a></div>
      <input type="text" class="search_input" name="search" />
      <input type="image" src="images/search.gif" class="search_bt"/>
    </div>
    <div class="languages">
      <div class="lang_text">Languages:</div>
      <a href="http://all-free-download.com/free-website-templates/" class="lang"><img src="images/tiranga.png" width="20"  height="20"alt="" border="0" /></a> <a href="http://all-free-download.com/free-website-templates/" class="lang"></a> </div>
  </div>
  <div id="header">
    <?php  require_once("inc/logo.php")?>
    </div>
    <!-- end of oferte_content-->
  </div>
  <div id="main_content">
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
	  <?php require_once("inc/menu.php")?>
      <div class="right_menu_corner"></div>
    </div>
    <!-- end of menu tab -->
    <div class="crumb_navigation"> Navigation: <span class="current">Home</span> </div>
    <div class="left_content">
      <div class="title_box">Categories</div>
	  <?php    
		require_once("inc/sidebar.php");
	  
	  ?>
            <div class="title_box">Special Products</div>
      <div class="border_box">
        <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
        <div class="product_img"><a href="details.html"><img src="images/laptop.png" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
      </div>
      <div class="title_box">Newsletter</div>
      <div class="border_box">
        <input type="text" name="newsletter" class="newsletter_input" value="your email"/>
        <a href="http://all-free-download.com/free-website-templates/" class="join">join</a> </div>
      <div class="banner_adds"> <a href="http://all-free-download.com/free-website-templates/"><img src="images/bann2.jpg" alt="" border="0" /></a> </div>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar"><span class="login_logo">ForgotPassword</span></div>
      <div>
	  <?php
	  if(!isset($_SESSION["fp_uid"]))
	  {
	  
	  ?>
			<div id="left">
			<b>ForgotPassword</b>
              <form   action="process_forgot_password.php" method="POST">
				
				Email:<br/><br/>
				<input type="text" name="eml" id="eml" style=" padding:5px;"/><br/><br/>
				
				<input type="submit" value="Next &rarr;" style="width:70px; height:30px;  border:1px solid #a1a1a1;"/>
              </form>
			  </div>
			  
			 <?php } 
			 
			 else
			 {
			 
			 
			 ?>
			  
			  
			  <br/>
			  <div>
			  <b>Security Question</b>
			  <form   action="process_forgot_password.php" method="POST">
				
				Security Answer:<br/><br/>
				<input type="text" name="sans" id="sans" style=" padding:5px;"/><br/><br/>
				
				<input type="submit" value="Next &rarr;" style="width:70px; height:30px;  border:1px solid #a1a1a1;"/>
              </form>
			</div>
			
			<?php
			}
			
			?>
			</div>
			
			
</div>


    <!-- end of center content -->
  </div>
  <!-- end of main content -->
  <div class="footer">
    <?php  require_once("inc/footer.php"); ?>
</div>
</div>
<!-- end of main_container -->
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
