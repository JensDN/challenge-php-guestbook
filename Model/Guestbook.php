<?php


class Guestbook
{
   private $guestbook;
   public function __construct($data)
   {
       $this->guestbook = json_decode($data);
   }
   public function getBool(){
       return isset($this->guestbook);
   }
   public function render(){
       $reversearr = array_reverse($this->guestbook);
       $reverseguestbook = array_slice($reversearr, 0, 20) ;

       require 'View/includes/guestbook.php';
   }
}