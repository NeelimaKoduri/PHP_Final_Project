<?php
 
class user{
    protected $firstname;
    protected $lastname;
    protected $dob;
    protected $email;
    protected $password;
    protected $confpassword;
    
    public function setFirstname($firstname){
        $this->firstname=$firstname;
    }

    public function getFirstname(){
        return $this->firstname;
    }



   
}
?>