<?php include('partials/menu.php'); ?>


	<!--Main content selection-->
	<div class="main-content">
		<div class="wrapper">
		<h1>DASHBOARD</h1>
		<br>
			<?php
if(isset($_SESSION['login']))
{
	echo $_SESSION['login'];
	unset($_SESSION['login']);

}
		?>
		<br>
				<div class="col-4 text-center">
			<h1>5</h1>
			<br  />
			CATEGORIES
		</div>
		<div class="col-4 text-center">
			<h1>5</h1>
			<br  />
			CATEGORIES
		</div>
		<div class="col-4 text-center">
			<h1>5</h1>
			<br  />
			CATEGORIES
		</div>
		<div class="col-4 text-center">
			<h1>5</h1>
			<br  />
			CATEGORIES
		</div>
		<div class="clearfix"></div>
	</div>
</div>


<?php include('partials/footer.php'); ?>

	