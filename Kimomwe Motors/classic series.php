<HTML>
	<HEAD>
		<title>Kimomwe Motors</title>
		<meta name=""viewport" content="width-device-width", initial-scale=1.0">
		<link rel="stylesheet" href="trend.css"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
	</HEAD>
	
	<BODY>
		<img class="img-banner" src="banner.png" alt="Banner"/>
	<nav>
		<div class="toggle">
			<i class="fa fa-bars menu" aria-hidden="true"></i>
		</div>
		<ul>
			<li><a href="kimomwe motors.php">Home</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="classic series.php">Classic Series</a></li>
			<li><a href="performer class.php">Performer Class</a></li>
			<li><a href="budget.php">Budget</a></li>
			<li><a href="contact.html">Contacts</a></li>
		</ul>
	</nav>
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.menu').click(function(){
				$('ul').toggleClass('active');
			})
		})
	</script>
	
	<?php
		
		$connect = mysqli_connect('localhost', 'root', '', 'kimomwe');
		$query = 'SELECT * FROM cars ORDER by id ASC';
		$result = mysqli_query($connect, $query);
		
		if ($result):
			if(mysqli_num_rows($result)>0):
				while($car = mysqli_fetch_assoc($result)):
					$rest = $car['class'];
					$test = ">>Classic Series<<";
					if($rest == $test):
				?>
						<div class = "col-sm-4 col-md-3">
							<div class="cars">
								<img src= "<?php echo $car['pic'];?>" class = "img-responsive" />
								<br/>
								<a href="<?php echo $car['page extend']; ?>">view images</a>
								<br/>
								<h3 class = "text-info"><?php echo $car['make']; echo " "; echo $car['name'] ?></h3>
								<h4 class = "text-info"><?php echo $car['description']; ?></h4>
								<h4>TZS <?php echo $car['price']; ?></h4>
								<input type = "hidden" name = "name" value = "<?php echo $car['name']; ?>" />
								<input type = "hidden" name = "price" value = "<?php echo $car['price']; ?>" />
							</div>
						</div>
				<?php
					endif;
				endwhile;
			endif;
		endif;
		?>
	</BODY>
</HTML>