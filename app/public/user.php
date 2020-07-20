<?php get_header();?>
<?php

if ($method == 'add'){
	require_once  ROOT . '/app/public/user/add.php';
}
if ($method == 'delete'){
	require_once  ROOT . '/app/public/user/delete.php';
}
if ($method == 'index'){
	require_once  ROOT . '/app/public/user/index.php';
}

?>
<?php get_footer();?>
