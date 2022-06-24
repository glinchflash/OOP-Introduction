<?php

declare(strict_types=1);

/* EXERCISE 1
TODO: Create a class beverage.
TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
TODO: Have a default value "cold" in the construct for temperature.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.
TODO: Print the temperature on the screen.

USE TYPEHINTING EVERYWHERE!
*/

class Beverage
{
    // the properties
    public string $name;
    public float $price;
    public string $temperature;
    public string $color;

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


}
//make new object(beverage) called cola with the correct parameters
$cola = new Beverage("Cola", 2, "black");
// show the info of the beverage (cola)
$cola -> getInfo();
// show temperature
echo $cola ->temperature;
