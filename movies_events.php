<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster+Two:wght@700&family=Yellowtail&display=swap" rel="stylesheet">
	</head>
<?php include('header.php');?>
</div>
<div class="content" style ="background:url(images/p11.jpg)">
	<div class="wrap">
		<div class="content-top">
			<h3 style="font-family: 'Lobster Two', cursive;">Movies</h3>
			
			<?php
          	 $today=date("Y-m-d");
          	 $qry2=mysqli_query($con,"select * from  tbl_movie ");
		
          	  while($m=mysqli_fetch_array($qry2))
                   {
                    ?>
                    
                    <div class="col_1_of_4 span_1_of_4">
					<div class="imageRow">
						  	<div class="single">
						  		<?php
						
						?>
						  		<a href="about.php?id=<?php echo $m['movie_id'];?>"><img src="<?php echo $m['image'];?>" alt="" /></a>
						  	</div>
						  	<div class="movie-text">
						  		<h4 class="h-text"><a href="about.php?id=<?php echo $m['movie_id'];?>"><?php echo $m['movie_name'];?></a></h4>
						  		Cast:<Span class="color2"><?php echo $m['cast'];?></span><br>
						  		
						  	</div>
		  				</div>
		  		</div>
		  		
  	    <?php
  	    	}
  	    	?>
			
			</div>
				<div class="clear"></div>		
			</div>
			<?php include('footer.php');?>