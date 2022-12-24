<?php session_start();
if(!isset($_GET["cid"])|| !ctype_digit($_GET["cid"]))
{
	header("location:index.php");
	exit;
}
require_once("classes/dbo.class.php");


//paging
$countq = "select count(*) from product, category, companies where p_cat_id = cat_id and p_cmp_id = cmp_id and p_cat_id = '".$_GET["cid"]."'";
$pg_total_items=$db->get_scalar($countq);

$pg_items_per_page=6;
$pg_current_page=(isset($_GET["page"])) ? $_GET["page"]: 1;
$pg_last_page= ceil($pg_total_items / $pg_items_per_page);
$pg_this_page_start=($pg_current_page -1) * $pg_items_per_page;

$q="select * from product,category,companies where p_cat_id=cat_id and p_cmp_id=cmp_id and p_cat_id='".$_GET["cid"]."' limit ".$pg_this_page_start.",".$pg_items_per_page;
$pres=$db->get($q);



?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
       <div class="center_title_bar">Products</div>
	   
	   <!--pagging--->
	   
	   <?php
		if(mysqli_num_rows($pres)==0)
		{
			echo'<b>sorry!</b><br/>no product found for this category';
		}
		else
		{
	   
	   
	   ?>
      	
			<?php
			
			while($prow=mysqli_fetch_assoc($pres))
			{
				echo'
				<div class="prod_box">
					<div class="top_prod_box"></div>
					<div class="center_prod_box">
					  <div class="product_title"><a href="details.php">'.$prow["p_nm"].'</a></div>
					  <div class="product_img"><a href="details.php?did='.$prow["p_id"].'"><img src="uploads/'.$prow["p_img1"].'" width="100" height="100" alt="" border="0" /></a></div>
					  <div class="prod_price"><span class="reduce"></span> <span class="price">'.$prow["p_rate"].'</span></div>
					</div>
					<div class="bottom_prod_box"></div>
					<div class="prod_details_tab"><a href="details.php?did='.$prow["p_id"].'" class="prod_details">details</a> </div>
				 </div>
				';
			}
			
			?> 

				<!--pagging-->
				<?php
					if($pg_current_page > 1)
					{
						echo'
							<span class="pleft">
								<a href="list.php?cid='.$_GET["cid"].'&page='.($pg_current_page -1).'"><img src="images/previous.png"></a>
							</span>
						
						
						';
					}
					else
					{
						echo'
							<span class="pleft">
								<img src="images/previous.png">
							</span>
						
						';
					}
					if($pg_current_page < $pg_last_page)
					{
								echo'
									<span class="pright">
										<a href="list.php?cid='.$_GET["cid"].'&page='.($pg_current_page + 1).'"><img src="images/next.png"/></a>
									</span>
								
								';
					
					}
					else
					{
						echo'
							<span class="pright">
								<img src="images/next.png">
							</span>
						';	
					}
					echo '<div class="clr"></div><hr color="#a1a1a1" size="1" />';
					
					for($i=1;$i<=$pg_last_page;$i++)
					{
						if($i==$pg_current_page)
							echo $i.' ';
						else
							echo '<a href="list.php?cid='.$_GET["cid"].'&page='.$i.'">'.$i.'</a>';
					}
				?>
				<?php }  ?>
				
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
