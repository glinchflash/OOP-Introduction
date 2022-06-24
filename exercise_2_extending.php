<?php

declare(strict_types=1);
//linking exercise 1 and saying this is mandatory to run this
require 'exercise_1_classes.php';
/* EXERCISE 2

TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholPercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/

echo "<br>";
//making a new class that builds upon Beverage (and gets access to the same properties)
class Beer extends Beverage
{
    //properties of the child class
    public float $alcoholPercentage;
//constructor for child class (uses same properties as parentclass + the child class properties)
    public function __construct(string $name, float $price, string $color, float $alcoholPercentage)
    {
        //constructor from parent class with parent properties to build the object using parent construct with the child construct
        parent::__construct( $name, $price, $color);
        $this->alcoholPercentage = $alcoholPercentage;
    }

    //getter to get the alcohol percentage
    public function getAlcoholPercentage():float
    {
        return $this->alcoholPercentage;
    }


}
//making a new object of the class beer
$Duvel = new Beer("Duvel", 3.5, "Blond", 8.5);
//using the getter from the parent class
$Duvel->getInfo();
//using the getter from child class
echo $Duvel->getAlcoholPercentage(),"<br>";
//different way to display the alcohol percentage without a getter
echo $Duvel->alcoholPercentage,"<br>";
//display color
echo $Duvel->color;
//forcing an error cause Cola is from the parent class, so won't be able to access the properties of child class
echo $cola->getAlcoholPercentage();