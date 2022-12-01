<?php 
namespace Wandev\Contact\database\factories;

 abstract class MessageFactory{
    public abstract function createMail($message,$subject, $name, $email);
    

 }
?>