<HTML>
<HEAD>
	<meta charset="utf-8">
	<title>Cips Library</title>
	<meta name=""viewport" content="width-device-width", initial-scale=1.0">
	<link rel="stylesheet" href="rule.css"/>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</HEAD>
<BODY>
	<img class="img-banner" src="Billboard.png" alt="Banner"/>
	<nav>
		<div class="toggle">
			<i class="fa fa-bars menu" aria-hidden="true"></i>
		</div>
		<ul>
			<li><a href="cips library.html">Home</a></li>
			<li><a href="lbr000.php">000--Computer Science, Information & General Works</a></li>
			<li><a href="lbr100.php">100--Philosophy & Psycology</a></li>
			<li><a href="lbr200.php">200--Religion</a></li>
			<li><a href="lbr300.php">300--Social Sciences</a></li>
			<li><a href="lbr400.php">400--Language</a></li>
			<li><a href="lbr500.php">500--Pure Science</a></li>
			<li><a href="lbr600.php">600--Technology</a></li>
			<li><a href="lbr700.php">700--Arts & Recreation</a></li>	
			<li><a href="lbr800.php">800--Literature</a></li>
			<li><a href="lbr900.php">900--History & Geography</a></li>
			<li><a href="services.html">Services</a></li>	
			<li><a href="contacts.html">Contacts</a></li>
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
	<div class="wrapper">
		<img class="img-1stpic" src = "Graphics\lbr200.png" alt"Family"></img>
		<article class="img-info">
		<h2>200 - Religion</h2>
		<br/>
		<table>
		<tr>
		<td>Book</td><td>Author</td><td>Publish Date</td><td>Publication Location</td>
		</tr>
		<?php
		
		$connect = mysqli_connect('localhost', 'root', '', 'cipslibrary');
		
		$results_per_page = 20;
		
		$query = 'SELECT * FROM ct200 ORDER by id ASC';	
		$result = mysqli_query($connect, $query);
		$number_of_results = mysqli_num_rows($result);
			
		$number_of_pages = ceil($number_of_results/$results_per_page);
		
		if(!isset($_GET['page'])){
			$page = 1;
		}else{
			$page = $_GET['page'];
		}
		
		$this_page_first_result = ($page-1)*$results_per_page;
		
		$que = 'SELECT * FROM ct200 ORDER by id ASC LIMIT ' . $this_page_first_result . ',' . $results_per_page;
		$fesult = mysqli_query($connect, $que);
		
		if ($fesult):
			if(mysqli_num_rows($fesult)>0):
				while($ct200 = mysqli_fetch_assoc($fesult)):
				?>
					<tr>
					<td><a href = "Lib\<?php echo $ct200['web link']; ?>"><?php echo $ct200['book title']; ?></a></td><td><?php echo $ct200['author']; ?></td><td><?php echo $ct200['pub year']; ?></td><td><?php echo $ct200['pub loc']; ?></td><td>
					<?php
					$sellable = $ct200['sellable'];
					if ($sellable):
					?>
						<a href = "Shop\buy_<?php echo $ct200['web link']; ?>">Buy Now!</a></td>
					<?php
					endif;
					if (!$sellable):
					?>
						</td>
					<?php
					endif;
					?>
					</tr>
				<?php
				endwhile;
			endif;
		endif;
		
		?>
		</table><br/><br/>
		<?php
		for ($page=1;$page<=$number_of_pages; $page++){
			echo '<a href="lbr200.php?page=' . $page . '">' . $page . '</a> ';
		}
		?>
		</article>
	</div>	
</BODY>
</HTML>