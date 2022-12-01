<?php 
namespace Wandev\Contact\factory;

 abstract class MessageFactory{
    public abstract function createMail($message,$subject, $name, $email);
    

 }
?>