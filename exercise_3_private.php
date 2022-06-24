<?php

declare(strict_types=1);

/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcohol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/
//parent class
class Beverage
{
    // the properties of the parent class
    private string $name;
    private float $price;
    private string $temperature;
    private string $color;

    //the constructor with required properties
    public function __construct(string $name, float $price, string $color)
    {
        $this->name = $name;
        $this->price = $price;
        $this->temperature = "cold";
        $this->color = $color;
    }

    // function to show info of the beverage created, (getter)
    public function getInfo(): void
    {
        echo "This $this->name is $this->temperature and has a $this->color color. The price for a $this->name: €$this->price";
        echo "<br>";
    }
    //function getter for color value
    public function getColor():string
    {
        return $this->color;
    }
    //function setter to change color
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    //function getter to get the name value
    public function getName():string
    {
        return $this->name;
    }

}


//create a child class from parent Beverage
class beer extends Beverage
{
    //properties of the child class
    private float $alcoholPercentage;
    //constructor for child class (uses same properties as parentclass + the child class properties)
    public function __construct(string $name, float $price, string $color, float $alcoholPercentage)
    {
        //constructor from parent class with parent properties to build the object using parent construct with the child construct
        parent::__construct($name, $price, $color);
        $this->alcoholPercentage = $alcoholPercentage;
    }

    //getter to get the alcohol percentage
    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }
//new function to show the alcohol percentage without a return (so no getter)
    public function displayAlcoholPercentage():void
    {
        echo $this->alcoholPercentage, "<br>";
    }

    //function to write the text on screen (private so not accesable without a getter)
    private function beerInfo():void
    {
        echo "Hi i'm " .$this->getName()." and have an alcohol percentage of $this->alcoholPercentage and I have a ".$this->getColor() ." color.";
    }
    //getter for the beer info to get access to it
    public function getBeerInfo():void
    {
         $this->beerInfo();
    }

}
//creating new object of the child class "beer"
$Duvel = new beer("Duvel", 3.5, "Blond", 8.5);
//calling the getter from parent class to show info
$Duvel->getInfo();
//calling the getter from child class
echo $Duvel->getAlcoholPercentage(), "<br>";
//calling 2nd function to get alcohol percentage which isn't a getter
$Duvel->displayAlcoholPercentage();
//calling the getter for color from parent class
echo $Duvel->getColor();
echo "<br>";
//setting the color to a new value with a setter (from parent class)
$Duvel->setColor("light");
//calling the getter for color from parent class again with new value
echo $Duvel->getColor();
echo "<br>";
//calling the getter from child class to display private function
$Duvel->getBeerInfo();