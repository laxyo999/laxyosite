<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
<<<<<<< HEAD
=======
use Illuminate\http\Request;
>>>>>>> d3d2f12861f51b6c745f9b0a3aa17c8fbfda21a5
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

<<<<<<< HEAD
class SendMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
=======
class SendMailable extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
     public $data;

>>>>>>> d3d2f12861f51b6c745f9b0a3aa17c8fbfda21a5
    /**
     * Create a new message instance.
     *
     * @return void
     */
<<<<<<< HEAD
    public function __construct($data=[])
    {
        $this->data = $data;
    }
=======
        public function __construct($data)
        {
            $this->data=$data;
        }
>>>>>>> d3d2f12861f51b6c745f9b0a3aa17c8fbfda21a5

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
<<<<<<< HEAD
         return $this->view('emails.upload',compact('data'));
    }

}
=======

        return
        $this->view('mails.SendMailable');
    }
}
>>>>>>> d3d2f12861f51b6c745f9b0a3aa17c8fbfda21a5
