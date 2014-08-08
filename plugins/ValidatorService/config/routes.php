<?php
namespace ValidatorService\Config;
 
use Cake\Routing\Router;
 
Router::plugin('ValidatorService', function($routes) {
	$routes->fallbacks();
});
