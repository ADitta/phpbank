<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User
{
  // Properties are attributes/vairables that belong to a class
  // Access Modifiers: public, private, protected
  // public - can be accessed from anywhere
  // private - can only be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes
  public $name;
  public $email;
  public $password;

  // A contructor is a function/method that runs when an object is created
  public function __construct($name, $email, $password)
  {
    $this->name = $name;
    $this->$email = $email;
    $this->$password = $password;
  }

  // Method is a function that belongs to a class
  function set_name($name)
  {
    $this->name = $name;
  }
  function get_name()
  {
    return " This is {$this->name} ";
  }
}

// Instansiate a user object

$user1 = new User("asim", "asim@asim.com", "123");
$user2 = new User("misa", "misa@asim.com", "12345");

// $user1->set_name("asim");
// $user2->set_name("misa");
echo $user1->name;
// echo $user1->get_name();
// echo $user2->name;

// Inheritence
class Employee extends User
{
  public $title;
  public function __construct($name, $email, $password, $title)
  {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function get_title()
  {
    return $this->title;
  }
}

$employee1 = new Employee("Asim", "asim@asim.com", "123", "SUPREME CEO");

echo $employee1->get_title();
