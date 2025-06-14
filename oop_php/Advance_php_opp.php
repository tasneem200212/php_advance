<?php

//Task 1: Class and Object Creation 

/*
 class Car{
public  $make;
public  $model;
public  $year;

function set_make($make){
$this->make=$make;
}

function get_make(){
 return $this->make;   
}

function set_model($model){
    $this->model=$model;
}

function get_model(){
    return $this->model;
}

function set_year($year){
    $this->year=$year;
}

function get_year(){
    return $this->year;
}
}

$myCar=new Car();
$myCar->set_make('Toyota');
$myCar->set_model('Corolla');
$myCar->set_year('2020');

echo "Make: ". $myCar->get_make();
echo "<br>";
echo "Model: ". $myCar->get_model();
echo "<br>";
echo "Year: ". $myCar->get_year();
*/

//Task 2: Inheritance and Polymorphism 
/*
class Vehicle{
    public  $type;
    
    function move(){
        echo "The vehicle is moving.<br>";
        }
} 

class Car extends Vehicle{
    private  $model; 
     public function __construct($model) {
        $this->model = $model;
    } 

    function move(){
    echo "The vehicle {$this->model} is driving on the road.<br>";

        }
}


class Bike extends Vehicle{
  
    function move(){
        echo "The vehicle is Bike.<br>";
        }
}


$Car=new Car("Toyota");
$Bike=new Bike();

$Car->move();
$Bike->move();
*/

//Task 3: Encapsulation 
 
/*
class Car{
    private  $make;
    private  $model;
    private  $year;
    
    function set_make($make){
    $this->make=$make;
    }
    
    function get_make(){
     return $this->make;   
    }
    
    function set_model($model){
        $this->model=$model;
    }
    
    function get_model(){
        return $this->model;
    }
    
    function set_year($year){
        $this->year=$year;
    }
    
    function get_year(){
        return $this->year;
    }
    }
    
    $myCar=new Car();
    $myCar->set_make('Toyota');
    $myCar->set_model('Corolla');
    $myCar->set_year('2020');
    
    echo "Make: ". $myCar->get_make();
    echo "<br>";
    echo "Model: ". $myCar->get_model();
    echo "<br>";
    echo "Year: ". $myCar->get_year();
    */

//Task 4: Abstraction 
 
abstract class Shape{

   abstract public function calculateArea();
}

class Circle extends Shape{
    function calculateArea(){
    return "Circle";
    }
}

class Rectangle extends Shape{
    function calculateArea(){
    return "Rectangle";
    }   
}

$Circle=new Circle();
echo $Circle->calculateArea();
echo "<br>";
$Rectangle=new Rectangle();
echo $Rectangle->calculateArea();

?>