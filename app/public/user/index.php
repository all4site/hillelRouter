<main role="main" class="flex-shrink-0">
	<div class="container">
		<h1 class="mt-5 text-center"><?php echo $title; ?></h1>
		<form method="post" action="/">
			<?php foreach ($data as $key => $value): ?>
			<?php dump($value)?>
				<?php foreach ($value as $k => $v): ?>
					<?php if ($k == 'name'): ?>
						<div class="form-row">
						<div class="col">
							<input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $v; ?>">
						</div>
					<?php endif; ?>
					<?php if ($k == 'email'): ?>
						<div class="col">
							<input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $v; ?>">
						</div>
						</div>
					<?php endif; ?>
				<?php endforeach; ?>
			<?php endforeach; ?>
		</form>
	</div>
</main>