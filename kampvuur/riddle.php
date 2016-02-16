<?php 
	include'top.php';
	$title = 'Raadsel'; 
	$h1 = 'Raadsel';
	$la2 = active;
	$_GET = $hints;
 ?>
<?php 
	include 'body.php';
 ?>
	<div class="frame">
		<?php 
			include'header.php';
		 ?>
		<?php 
		 	include'menu.php';
		 ?>		
		<div class="content">
			<?php 
				include'getriddle.php'
			 ?>
			<?php 
				include'gethints.php'
			 ?>
			<?php 
				include'getsolution.php'
			 ?>
		</div>
		<?php 
			include'footer.php';
		 ?>
	</div>
</body>
</html>