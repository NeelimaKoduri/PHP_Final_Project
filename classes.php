
    
 <?php

class classes{

    /*putting all the properties here*/
    protected $username;
    protected $password;  
    
    /*setter methods*/
    public function setUsername($username){
        $this->username=$username;
    }
    public function setPassword($password){
        $this->password=$password;
    }
   
    /*getter methods*/
    public function getUsername(){
        return $this->username;
    }

    public function getPassword(){
        return $this->password;
    }  

}

