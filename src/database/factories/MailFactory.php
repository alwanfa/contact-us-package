<?php 
namespace Wandev\Contact\factories;

 abstract class MessageFactory{
    public abstract function createMail($message,$subject, $name, $email);
    

 }
?>