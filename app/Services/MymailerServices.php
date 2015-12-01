<?php
namespace App\Services;
use App\Contracts\Mailer;

class MymailerServices implements  Mailer{
    function send($append){
        dd("send mail",$append);
    }
    function receive($append){
        dd("receive mail",$append);
    }
    function test(){
        dd("test test");
    }
}
