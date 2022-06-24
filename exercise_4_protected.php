<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/
class Beverage
{
    // the properties
    protected string $name;
    protected float $price;
    protected string $temperature;
    protected string $color;

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

    public function getColor():string{
        return $this->color;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
        echo $this->color;
    }
    public function getName():string
    {
        return $this->name;
    }

}


class beer extends Beverage
{
    protected float $alcoholPercentage;

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

    public function beerInfo():string
    {
        return "Hi i'm " .$this->name." and have an alcohol percentage of $this->alcoholPercentage and I have a ".$this->color ." color.";
    }


}

$Duvel = new beer("Duvel", 3.5, "Blond", 8.5);
$Duvel->getInfo();
echo $Duvel->getAlcoholPercentage(), "<br>";
$Duvel->displayAlcoholPercentage();
$Duvel->setColor("light");
echo "<br>";
echo $Duvel->beerInfo();