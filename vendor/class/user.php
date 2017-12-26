<?php
class Person 
{
  // Private property inside the class
    public $name;
    public $full_name;
    public $email;
 
  //Public setter method
    public function setName($name)
    {
        $this -> name = $name;
    }
    public function setFullName($full_name)
    {
        $this -> full_name = $full_name;
    }
    public function setEmail($email)
    {
        $this -> email = $email;
    }
    
}
 
 
//The child class inherits the code from the parent class
class Users extends Person 
{
    private $birthday;
    private $pets;
    
    public function setBirthday($birthday)
    {
        $this -> birthday = $birthday;
    }
    public function setPets($pets)
    {
        $this -> pets = $pets;
    }
    public function hello()
    {
        return "Class Users: <br/>I am <i>" . $this -> name . "</i><br />My Full Name is ". $this -> full_name . "<br/>and My Email is ". $this -> email. "<br/>My Birthday is ". $this -> birthday. "<br/>and I want ". $this -> pets. " as my birthday gift";
    }
}
class Admins extends Person
{
    private $password;
    
    public function setPassword($password)
    {
        $this -> password = $password;
    }
    public function helloAdmin()
    {
        return "Class Admins: <br/>I am <i>" . $this -> name . "</i><br />My Full Name is ". $this -> full_name . "<br/>and My Email is ". $this -> email. "<br/>My Password is ". $this -> password;
    }
    
}
?>
