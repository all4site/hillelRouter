<main role="main" class="flex-shrink-0">
	<div class="container">
		<h1 class="mt-5 text-center"><?php echo $title;?></h1>
		<form method="post" action="/">
			<div class="form-row">
				<div class="col">
					<input type="text" name="name" class="form-control" placeholder="Name">
				</div>
				<div class="col">
					<input type="text" name="email" class="form-control" placeholder="Email">
				</div>
				<button type="submit" class="btn btn-primary"><?php echo $action;?></button>

			</div>
		</form>
	</div>
</main>
