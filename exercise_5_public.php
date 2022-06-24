<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/
//parent class
class Beverage
{
    //properties of the parent class
    private string $name;
    private float $price;
    private string $temperature;
    private string $color;

    //the constructor with required properties from parent
    public function __construct(string $name, float $price, string $color)
    {
        $this->name = $name;
        $this->price = $price;
        $this->temperature = "cold";
        $this->color = $color;
    }
    // function to show info of the beverage created
    public function getInfo () : void  //void = function doesn't return anything
    {
        echo "This $this->name is $this->temperature and has a $this->color color. The price for a $this->name: €$this->price";
        echo "<br>";
    }
    //function to show temperature on screen
    public function showTemperature():void  //void = function doesn't return anything
    {
        echo $this->temperature;
    }
    //function with logic to change price upon statements reached
    public function setPrice(float $amount):void  //void = function doesn't return anything
    {
        if ($this->price<=3){
            $this->price += $amount;
            echo "due to inflation the price is now €$this->price <br>";
        }else{
            $this->price-=$amount;
            echo "due to overproduction the price is now €$this->price <br>";
        }

    }

}
//make new object(beverage) called cola with the correct parameters
$cola = new Beverage("Cola", 2, "black");
// call getter to get info from the drink
$cola -> getInfo();
// call function to show temperature
$cola->showTemperature();
echo "<br>";
//call function to dedicate price (once with the addition, once with the substraction)
$cola->setPrice(1.5);
$cola->setPrice(1.5);
