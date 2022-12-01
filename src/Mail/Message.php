<?php 
namespace Wandev\Contact\Mail;

interface Message{
    public function sendMessage();
    public function storeMessage();
}
?>