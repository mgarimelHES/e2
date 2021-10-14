<?php

class Person {

# Properties
    public $firstName;
    public $lastName;
    public $age;
# Methods

    public function __construct($firstName, $lastName, $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }
# Get Full Name
    public function getFullName()
    {
        return ($this->firstName." ".$this->lastName);
    }
#Get Classification
    public function getClassification()
    {
        print (($this->age) >= 18) ? "adult" : "minor";       
    }
}
#
$person = new Person('John', 'Harvard', 45);
echo $person->firstName; # Should print "John"
echo $person->getFullName(); # Should print "John Harvard"
echo $person->getClassification(); # Should print "adult"
#
?>