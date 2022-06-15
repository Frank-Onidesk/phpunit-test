<?php
class Email{
   
    private  $email;
    private function  __construct( string $email ) {
      
        $this->email = $email;
        Email::validateEmail();
      
     }

     public static function returnInstance() : self
      {
        return new self($this->email);
      }


      private function __toString(): string 
        {
            return  $this->email;
        }

     private function validateEmail() : mixed 
      {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
         throw new \InvalidArgumentException(
              sprintf(' "%s" is not a valid email!', $this->email)
           );
        }
     }
}

?>