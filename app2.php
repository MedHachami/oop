
<?php

Class User{
    protected $firstName;
    protected $lastName;

    

    public function __construct( $firstName , $lastName  ){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        
    }

    public function toString(){
        echo $this->firstName . ' ' . $this->lastName . "  " . "<br />";
    }
}
Class X {

}
Class Client extends User {
    private $role = "client";

    public function __construct($firstName , $secondName  ){
        parent::__construct($firstName , $secondName);
        
    }

    public function toString(){
        parent::toString();
        echo $this->role ;
    }


}


Class Admin extends User {
    private $role = "admin";
    // $firName = 
    // $firName = 

    public function __construct($firstName , $secondName  ){
        parent::__construct($firstName , $secondName); 
        
        
    }

    public function toString(){
        parent::toString();
        echo $this->role ;
    }


}



$user = new User("med" , "ghanam" );
$user->toString();

$client1 = new Client("med " , "hac");
$client1->toString();

$client2 = new Client("marouane " , "mde" );
$client2->toString();


$admin = new Admin("oussma " , "laaroubi" );
$admin->toString();