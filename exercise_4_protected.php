<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/
//parent class
class Beverage
{
    //properties of the parent class
    protected string $name;
    protected float $price;
    protected string $temperature;
    protected string $color;

    //the constructor with required properties from parent
    public function __construct(string $name, float $price, string $color)
    {
        $this->name = $name;
        $this->price = $price;
        $this->temperature = "cold";
        $this->color = $color;
    }

    // function to show info of the beverage created
    public function getInfo(): string  //string = function has to return a string(text)
    {
        return "This $this->name is $this->temperature and has a $this->color color. The price for a $this->name: €$this->price <br>";

    }
    //function getter for color value
    public function getColor():string{  //string = function has to return a string(text)
        return $this->color;
    }
    //function setter to change color
    public function setColor(string $color): void //void = function doesn't return anything
    {
        $this->color = $color;
        echo $this->color;
    }


}


//create a child class from parent Beverage
class beer extends Beverage
{
    //properties of the child class
    protected float $alcoholPercentage;
//constructor for child class (uses same properties as parentclass + the child class properties)
    public function __construct(string $name, float $price, string $color, float $alcoholPercentage)
    {
        //constructor from parent class with parent properties to build the object using parent construct with the child construct
        parent::__construct($name, $price, $color);
        $this->alcoholPercentage = $alcoholPercentage;
    }

    //getter to get the alcohol percentage
    public function getAlcoholPercentage(): float //float = function has to return a number with decimal
    {
        return $this->alcoholPercentage;
    }
//new function to show the alcohol percentage without a return (so no getter)
    public function displayAlcoholPercentage():void //void = function doesn't return anything
    {
        echo $this->alcoholPercentage, "<br>";
    }
//function to write the text on screen (public so accessable to all childs)
    public function beerInfo():void //void = function doesn't return anything
    {
        echo "Hi i'm " .$this->name." and have an alcohol percentage of $this->alcoholPercentage and I have a ".$this->color ." color.";
    }


}
//creating new object of the child class "beer"
$Duvel = new beer("Duvel", 3.5, "Blond", 8.5);
//calling the getter from parent class to show info
echo $Duvel->getInfo();
//calling the getter from child class
echo $Duvel->getAlcoholPercentage(), "<br>";
//calling 2nd function to get alcohol percentage which isn't a getter
$Duvel->displayAlcoholPercentage();
//setting the color to a new value with a setter (from parent class)
$Duvel->setColor("light");
echo "<br>";
//calling the getter from child class to display text
$Duvel->beerInfo();