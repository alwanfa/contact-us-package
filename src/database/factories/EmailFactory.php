<?php 
namespace Wandev\Contact\database\factories;

use Illuminate\Support\Facades\Mail;
use Wandev\Contact\Mail\Email;
    class EmailFactory extends MessageFactory{
        
        public function createMail($message,$subject, $name, $email)
        {
            Mail::to(config('contact.send_email_to'))->send(new Email($message,$subject,$name,$email));
            return new Email($message,$subject, $name, $email);
     
        }
        
    }
?>