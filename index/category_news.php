<?php 
	include "header.php";
	include "../public/db.php";
	$id=$_GET["id"];
?>
<!--twobanner-->
<link rel="stylesheet" type="text/css" href="../css/public.css"/>
<link rel="stylesheet" type="text/css" href="../css/category_news.css"/>
<script src="../js/jquery.min.js"></script>
<!--<script src="../js/category_news.js"></script>-->
<style>
	.contentsleftbox>ul>li{
		background: url(../images/contentleft1.png) no-repeat 0 34px;
	}
	.contentsleftbox>ul>li>a:hover{
		background: url(../images/contentleft2.png) no-repeat;
		color: #491304;
		font-size: 16px;
	}
</style>
	<div class="twobannerbigbox" style="background: url(../images/twobanner.png) no-repeat center;">
		<div class="twobannerbox" style="background: url(../images/twobanner1.jpg) no-repeat;">
		</div>
	</div>
<!--twobanner-->
<!--content-->
	<div class="contentsbigbox">
		<div class="contentsleftbox" style="background: url(../images/contentleft.png) no-repeat;">
			<ul>
				<?php 
					$sql="select * from category where cid=".$id;
					$result=$db->query($sql);
					while($row=$result->fetch_assoc()){ ?>
						<li><a href="list_news.php?id=<?php echo $row["cid"]?>"><?php echo $row["cname"]?></a></li>
					<?php 
					} 
					?>
			</ul>
		</div>
		<div class="contentsrightbox" style="background: url(../images/contentright.png);">
			<div class="contentstop" style="background: url(../images/contentstop.png);">
				<div class="contentstop-left">
					<?php 
					$sql2="select * from category where cid=".$id;
					$result2=$db->query($sql2);
					while($row2=$result2->fetch_assoc()){ ?>
						<span class="contentstopwenzi1"><?php echo $row2["cname"]?></span>
						<span class="contentstopwenzi2">news</span>
				</div>
				<div class="contentstop-right">
					<a href="index.php">首页</a><span>&gt;</span>
					<span><?php echo $row2["cname"]?></span>
				</div>
				<?php 
					} 
					?>
			</div>
			<div class="contentsbottom">
				<ul>
					<?php 
						
					$sql3="select * from shows where cid=".$id;
					$result3=$db->query($sql3);
					while($row3=$result3->fetch_assoc()){ ?>
					<li class="contentslist" style="background: url(../images/contentnews.png) no-repeat left center;">
						<span><a href="show_news.php?id=<?php echo $row3["cid"]?>&sid=<?php echo $row3["sid"]?>"><?php echo $row3["stitle"]?></a></span>
						<em><?php echo $row3["stime"] ?></em>
					</li>
					<?php 
					} 
					?>
				<div class="contentxian">
					
				</div>
				</ul>
			</div>
		</div>
	</div>
<!--content-->
<?php
	include "footer.php";
?>
