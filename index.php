<html>
<body>
<?php
include('header.php');
?>

<div class="content" style ="background:url(images/p11.jpg)">
	<div class="wrap">
		<div class="content-top">
				<div class="listview_1_of_3 images_1_of_3">
					<h3>Upcoming Movies</h3>
					<?php 
					$qry3=mysqli_query($con,"select * from tbl_news");
					
					while($n=mysqli_fetch_array($qry3))
					{
					?>
				<div class="content-left">
					<div class="listimg listimg_1_of_2">
						 <img src="admin/<?php echo $n['attachment'];?>">
					</div>
					<div class="text list_1_of_2">
						  <div class="extra-wrap">
						  	<span style="color:red" class="data"><strong><?php echo $n['name'];?></strong><br>
						  	<span style="color:blue" class="data"><strong>Cast :<?php echo $n['cast'];?></strong><br>
                                <div  class="data" style="color:green">Release Date :<?php echo $n['news_date'];?></div>
                                
                                
                                
                                <span class="text-top" ><?php echo $n['description'];?></span>
                          </div>
					</div>
					<div class="clear"></div>
				</div>
				<?php
				}
				?>
				
			
		</div>				
		<div class="listview_1_of_3 images_1_of_3">
					<h3>Trending Trailers</h3>
						<div class="middle-list">
					<?php 
					$qry4=mysqli_query($con,"select * from tbl_movie order by rand()");
				
					while($nm=mysqli_fetch_array($qry4))
					{
					?>
					
						<div class="listimg1">
							 <a target="_blank" href="<?php echo $nm['video_url'];?>"><img src="<?php echo $nm['image'];?>" alt=""/></a>
							 <a target="_blank" style="color:#FF0000"  href="<?php echo $nm['video_url'];?>" class="link"><?php echo $nm['movie_name'];?></a>
						</div>
						<?php
					}
					?>
					</div>
					
					
		</div>			
		<?php include('movie_sidebar.php');?>
	</div>
</div>
<?php include('footer.php');?>
</div>
<?php include('searchbar.php');?>