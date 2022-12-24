<?php session_start();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Electronix Store</title>
<?php require_once("inc/head.php")?>
<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
<script   type="text/javascript">
	$(document).ready(function(){
		
</script>
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
     <div class="center_title_bar"><span class="cont_logo">Contact</span></div>
		<div id="output"></div>
		<div class="left">
			<form id="frm" action="process_contact.php" method="post" >
				FullName:<br/>
				<input type="text" name="nm" id="nm" style="width:260px;padding:4px;"/><br/><br/>
				
				Email:<br/>
				<input type="text" name="eml"  id="eml" style="width:260px;padding:4px;"/><br/><br/>
				
				Phone<br/>
				<input type="text" name="phn" id="phn" style="width:260px;padding:4px;"/><br/><br/>
				
				Subject:<br/>
				<input type="text" name="sub" id="sub" style="width:260px;padding:4px;"/><br/><br/>
				
				Message:<br/> 
				<textarea name="msg" id="msg" style="width:260px;padding:4px;"></textarea><br/><br/>
				
				<input type="button"  id="save" value="Send Feedback" style="background:#a1a1a1;"/>
				
				<img src="images/ajax-loader.gif" style="display: none;" id="loading" width="20px" height="20px"/>

			</form>      
		</div>
		
		<div class="right">
			<b>Get to  touch</b><br/>
			<span class="location">satavara vishal<br/><br/>
			Adarsh Nagar garbi chowk<br/><br/> joshipura	junagadh<br/>
			
			</span>
				<span class="mobile_logo">+918401836615</span><br/><br/>
				<span class="telephone_logo">+918401836615</span><br/><br/>
				<span class="http_logo">http://www.electronicsitems.com</span><br/><br/>
				<span class="email_logo">vishal@gmail.com</span><br/>
				
		</div>
    </div>
    <!-- end of center content -->
  </div>
  <!-- end of main content -->
  <div class="footer">
    <?php  require_once("inc/footer.php"); ?>
</div>
<!-- end of main_container -->
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
