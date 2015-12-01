<?php
namespace App\Contracts;


interface Mailer{
    function  send($append);
    function receive($append);
}