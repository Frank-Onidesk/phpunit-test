<?php 
declare(strict_types=1);
require "Email_Class.php";
require 'vendor\autoload.php';

class testEmail extends \PHPUnit\Framework\TestCase{


public function testInstanceType()   : void
{
    self::assertInstanceOf(
    Email::class,
    Email::returnInstance('onidesk@outlook.com')
   );
  }
}
?>