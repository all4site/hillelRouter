<?php
$MyRouters = [
		'^$' =>
				[
						'controller' => 'main',
						'action' => 'index'
				],
		'^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$' =>[],


];