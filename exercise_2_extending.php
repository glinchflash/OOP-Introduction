<?php

declare(strict_types=1);
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
class beer extends Beverage
{
    public float $alcoholPercentage;

    public function __construct(string $name, float $price, string $color, float $alcoholPercentage)
    {
        parent::__construct( $name, $price, $color);
        $this-> alcoholPercentage = $alcoholPercentage;
    }


    public function getAlcoholPercentage():float
    {
        return $this->alcoholPercentage;
    }


}

$Duvel = new beer("Duvel", 3.5, "Blond", 8.5);
$Duvel->getInfo();
echo $Duvel->getAlcoholPercentage(),"<br>";
echo $Duvel->alcoholPercentage,"<br>";
echo $Duvel->color;
echo $cola->getAlcoholPercentage();