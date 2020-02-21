<?php
declare(strict_types = 1);

class HomepageController
{
    public function renderContactform() {
        require 'View/includes/contactform.php';
    }
    public function renderProcessedForm(){
        $message = new Message($_POST["name"],$_POST["title"],$_POST["message"]);
        $json = new JSON;
        $json->setData($message->JSONparsing());
        $json->setFileData();
        require 'View/includes/processform.php';
    }
    public function render (){

        require 'View/homepage.php';
    }
}