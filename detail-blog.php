<?php 
	include('lib/connect.php'); 
	date_default_timezone_set("Asia/Kolkata");
	if(isset($_REQUEST['bid'])) 
	{ 
		$bid=$_REQUEST['bid'];
		$query1= "update blog set ClickCount=ClickCount + 1 where blog.BlogId='$bid'";
		$result1=mysqli_query($con,$query1) or die(mysqli_error($con));
		$query="SELECT blog.*, blogcategory.BlogCategoryName FROM blog INNER JOIN blogcategory ON blog.BlogCategoryId = blogcategory.BlogCategoryId where blog.BlogId='$bid' and blog.active='1'"; 
		$result=mysqli_query($con,$query)or die(mysqli_error($con)); 
		while($row=mysqli_fetch_array($result))
		{ 
			$BlogTitle=$row[2]; 
			$BlogDescription=$row[4];
			$BlogPhoto=!empty($row[5]) ? 'images/BlogPic/'.$row[0].'/'.$row[0].'_'.$row[5] : 'images/noimage.gif'; 
			$PostedBy=$row[7];
			$ClickCount=$row[8]; 
			$CreateDate=date("M d, Y", strtotime(str_replace('-','/', $row[10])));
			$d=date("d", strtotime(str_replace('-','/', $row[10])));
			$M=date("M", strtotime(str_replace('-','/', $row[10])));
			$BlogCategoryName=$row[14];
			$BlogCategoryNameWithDash=str_replace(" ","-",$row[14]);
		} 
	}
?>

<!doctype html>
<html dir="ltr" lang="en-US">
<head>
	<?php include('head.php'); ?>
	<title> <?php echo $BlogTitle; ?> ::Vrb </title>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo $BlogTitle; ?> :: Blog :: Vrb" />
	<meta property="og:url" content="http://www.Vrb.com/blog.php" />
	<meta name="twitter:title" content="<?php echo $BlogTitle; ?> :: Blog :: Vrb"/>
</head>
<body>
    <div class="page-wrapper">
       <?php include('header.php'); ?>
		<main class="main">
			<!--<div class="page-header page-header-bg text-center" style="background-image: url('images/banner/blog-banner.jpg');">
                <div class="container">
                    <h1> Blog</h1>
                </div>
            </div> -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb mt-0">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
						<li class="breadcrumb-item active" aria-current="page"><?php echo $BlogTitle; ?></li>
                    </ol>
                </div>
            </nav>
            <div class="about-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-9">
							<article class="entry single">
								<div class="entry-media">
									<div class="entry-slider owl-carousel owl-theme owl-theme-light">
										<img src="<?php echo $BlogPhoto; ?>" alt="Post">
									</div>
								</div>
								<div class="entry-body">
									<div class="entry-date">
										<span class="day"><?php echo $d; ?></span>
										<span class="month"><?php echo $M; ?></span>
									</div>
									<h2 class="entry-title">
										<?php echo $BlogTitle; ?>
									</h2>

									<div class="entry-meta">
										<span><i class="icon-calendar"></i><?php echo $CreateDate; ?></span>
										<span><i class="icon-user"></i>By <a href="#"><?php echo $PostedBy; ?></a></span>
										<span><i class="icon-eye"></i><?php echo $ClickCount; ?></span>
										<span><i class="icon-folder-open"></i><a href="blog.php?c=<?php echo $BlogCategoryNameWithDash; ?>"><?php echo $BlogCategoryName; ?></a></span>
									</div>
									<div class="entry-content"><?php echo $BlogDescription; ?></div>
									<div class="tagcloud">
										<h3><i class="fa fa-tags"></i>Tags</h3>
										<hr class='m-0 mb-2'/>
										<figure>
											<?php
												include('lib/connect.php'); 
												if(isset($_REQUEST['bid'])) 
												{ 
													$query="SELECT BlogTags FROM blog where BlogId='$bid'";
													$result=mysqli_query($con,$query)or die(mysqli_error($con)); 
													$i=0; 
													while($row=mysqli_fetch_array($result))
													{ 
														$BlogTag=$row[0]; 
														$TagsArray=explode(',', $BlogTag); 
														for($i; $i < count($TagsArray); $i++)
														{echo " <a href='#'>$TagsArray[$i]</a>";}
													} 
												} 
											?>
										</figure>
									</div>
								</div>
							</article>
						</div>
						<?php include('uc-blog.php'); ?>
					</div>
				</div>
				<div class="mb-6"></div>
			</div>
		</main>
		<?php include('footer.php'); ?>
    </div>
   <?php include('sticky.php'); ?>
</body>
</html>
