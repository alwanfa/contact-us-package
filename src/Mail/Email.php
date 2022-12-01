<?php

namespace Wandev\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Wandev\Contact\Mail\Message;
// use Wandev\Contact\Message\Message;


class Email  extends Mailable implements Message
{
    use Queueable, SerializesModels;
    public $message;

    public $subject;
    public $name;
    public $email;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message,$subject, $name, $email)
    {
        $this->message = $message;
        $this->name=$name;
        $this->subject=$subject;
        $this->email=$email;

        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::contact.mail')->from($this->email,$this->name)->with([
            'message'=> $this->message, 'name'=>$this->name,'email'=>$this->email,'subject'=>$this->subject]);
    }
    public function sendMessage()
    {
        
    }
    public function storeMessage()
    {
        
    }
}
