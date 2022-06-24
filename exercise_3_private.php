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
    public function getInfo(): void
    {
        echo "This $this->name is $this->temperature and has a $this->color color. The price for a $this->name: €$this->price";
        echo "<br>";
    }

    public function getColor():string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getName():string
    {
        return $this->name;
    }

}


class beer extends Beverage
{
    private float $alcoholPercentage;

    public function __construct(string $name, float $price, string $color, float $alcoholPercentage)
    {
        parent::__construct($name, $price, $color);
        $this->alcoholPercentage = $alcoholPercentage;
    }


    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    public function displayAlcoholPercentage():void
    {
        echo $this->alcoholPercentage, "<br>";
    }


    private function beerInfo():void
    {
        echo "Hi i'm " .$this->getName()." and have an alcohol percentage of $this->alcoholPercentage and I have a ".$this->getColor() ." color.";
    }

    public function getBeerInfo():void
    {
         $this->beerInfo();
    }

}

$Duvel = new beer("Duvel", 3.5, "Blond", 8.5);
$Duvel->getInfo();
echo $Duvel->getAlcoholPercentage(), "<br>";
$Duvel->displayAlcoholPercentage();
echo $Duvel->getColor();
echo "<br>";
$Duvel->setColor("light");
echo $Duvel->getColor();
echo "<br>";
$Duvel->getBeerInfo();