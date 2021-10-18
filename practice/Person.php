<?php

class Person {

# Properties
    public $firstName;
    public $lastName;
    public $age;
#test
public $name;
public $name1 = 'John';
public $names = ['Jane', 'Avi', 'Jamal', 'Natalia'];
public $names1 = file_get_contents('names.json');

# Methods

    public function __construct($firstName, $lastName, $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;

# debug
   var_dump($this->name1);
   var_dump($this->names);
//   var_dump($this->names1);
   var_dump(file_get_contents('names.json'));

# end
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