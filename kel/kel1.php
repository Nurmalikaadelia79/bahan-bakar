<?php

class Person {
  private $name;
  private $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function greet() {
    return "Hello, my name is {$this->name} and I am {$this->age} years old.";
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function setAge($age) {
    if ($age >= 0 && $age <= 120) {
      $this->age = $age;
    } else {
      echo "Invalid age.";
    }
  }

  public function getName() {
    return $this->name;
  }

  public function getAge() {
    return $this->age;
  }
}

$person = new Person("John", 30);
echo $person->greet(); // Output: Hello, my name is John and I am 30 years old.

// Trying to access private properties directly will result in an error
// echo $person->name; // Error: Cannot access private property Person::$name

// Using setter methods to modify private properties
$person->setName("Alice");
$person->setAge(25);
echo $person->greet(); // Output: Hello, my name is Alice and I am 25 years old.

// Using getter methods to retrieve private properties
echo $person->getName(); // Output: Alice
echo $person->getAge(); // Output: 25