<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/
class Beverage
{
    // the properties
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
    // function to show info of the beverage created
    public function getInfo () : void
    {
        echo "This $this->name is $this->temperature and has a $this->color color. The price for a $this->name: €$this->price";
        echo "<br>";
    }

    public function showTemperature():void
    {
        echo $this->temperature;
    }

    public function checkprice(float $amount):void
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
// show the info of the beverage (cola)
$cola -> getInfo();
// show temperature
$cola->showTemperature();
echo "<br>";
//call function to dedicate price
$cola->checkprice(1.5);
$cola->checkprice(1.5);
