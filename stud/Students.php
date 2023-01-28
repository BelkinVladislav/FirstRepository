<?php 
namespace Work\stud;
class Students{

    private $firstName;
    private $lastName;
    private $attributes = [];

    public function __constructor(){
        echo 'g';
    }
    
    public function __get($name){
        return isset($this->attributes[$name]) ? $this->attributes[$name]:null;
    }

    public function __set($name, $value){
        $this->attributes[$name] = $value;
    }

    public function __isset($name){
        return isset($this->attributes[$name]);
    }
    public function __unset($name){
        unset($this->attributes[$name]);
    }
    public function getFullName(){
        return $this->lastName.' '.$this->firstName;
    }

    public function getLastName(){
        return $this->lastName;
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function rename($firstName, $lastName){
        $this->firstName = $firstName;
        $this->lastName =  $lastName;
    }

}
?>