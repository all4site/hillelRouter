<?php get_header();?>
	<main role="main" class="flex-shrink-0">
		<div class="container">
			<h1 class="mt-5 text-center">Вы искали: <span class="text-danger"><?php echo trim($_SERVER['REQUEST_URI'], '/')
					;?></span></h1>
			<p class="text-center">Такой страницы нет</p>
		</div>
	</main>
<?php get_footer();?>