ValidatorService-Plugin
======================

Error routing controllers inside plugin. plugin was only created with cake bake. 
the bootstrap and routnig files are taken from here: 
https://gist.github.com/markstory/87444680576f0ec6c4a6

using cakephp3.0.0-alpha2 
with xampp1.8.3
php 5.5.11 
Win 7 pro

Note: I only changed datasource and replaced the config files. 
The code was autp generated with bake commands
but when calling url: 
localhost/cake/validator_service/validators 

I get this error(of course the controller class is there - see source code): 
(this error does not occur with controllers outside plugins)
----------------------------

Missing Controller

Error: ValidatorServiceController could not be found.

Error: Create the class ValidatorServiceController below in file: src\Controller\ValidatorServiceController.php

<?php
namespace App\Controller;

use App\Controller\AppController;

class ValidatorServiceController extends AppController {

}

Notice: If you want to customize this error message, create src\Template\Error\missing_controller.ctp
Stack Trace

    ROOT\webroot\index.php line 37 → Cake\Routing\Dispatcher->dispatch(Cake\Network\Request, Cake\Network\Response)

    $dispatcher->dispatch(

        Request::createFromGlobals(),

        new Response()

    );

    object(Cake\Network\Request) {
    	params => [
    		[maximum depth reached]
    	]
    	data => [[maximum depth reached]]
    	query => [[maximum depth reached]]
    	cookies => [
    		[maximum depth reached]
    	]
    	url => 'validator_service/validators'
    	base => '/CakePhp3xalpha'
    	webroot => '/CakePhp3xalpha/'
    	here => '/CakePhp3xalpha/validator_service/validators'
    	trustProxy => false
    	[protected] _environment => [
    		[maximum depth reached]
    	]
    	[protected] _detectors => [
    		[maximum depth reached]
    	]
    	[protected] _input => ''
    	[protected] _session => object(Cake\Network\Session) {}
    }
    object(Cake\Network\Response) {
    	[protected] _statusCodes => [
    		[maximum depth reached]
    	]
    	[protected] _mimeTypes => [
    		[maximum depth reached]
    	]
    	[protected] _protocol => 'HTTP/1.1'
    	[protected] _status => (int) 200
    	[protected] _contentType => 'text/html'
    	[protected] _headers => [[maximum depth reached]]
    	[protected] _body => null
    	[protected] _file => null
    	[protected] _fileRange => [[maximum depth reached]]
    	[protected] _charset => 'UTF-8'
    	[protected] _cacheDirectives => [[maximum depth reached]]
    	[protected] _cookies => [[maximum depth reached]]
    }

CakePHP: the rapid development php framework	
