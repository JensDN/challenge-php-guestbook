<?php
declare(strict_types=1);

//include all your model files here

//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/JSON.php';
require 'Controller/Message.php';
require 'Model/Guestbook.php';
//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!
$controller = new HomepageController();
$controller->render();







