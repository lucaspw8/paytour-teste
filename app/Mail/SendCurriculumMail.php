<?php

namespace App\Mail;

use App\Models\Curriculum;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendCurriculumMail extends Mailable
{
    use Queueable, SerializesModels;

    private $curriculum;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Curriculum $curriculum)
    {
        $this->curriculum = $curriculum;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Recebemos seu currículo!');
        $this->to($this->curriculum->email,$this->curriculum->name);
        return $this->markdown('mail.sendCurriculumMail', [
            'curriculum' => $this->curriculum,
        ]);
    }
}
