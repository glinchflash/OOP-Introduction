
## Title: OOP The introduction

OOP - `Object Orientated Programming` - focuses on the objects that developers want to manipulate rather than the logic required to manipulate them. 
This approach to programming is well-suited for programs that are large, complex and actively updated or maintained.

## The objective
Learn the basics of OOP - `Object Orientated Programming` - like how to create following
1. a class
2. an object
3. a child class
4. an object of the child class
5. construct(or)
6. getters and setters
7. access levels (public,private & protected)
8. how the inheritance works
---

### 🌱 Must haves - the basics
- [Exercise 1](exercise_1_classes.php)
- [Exercise 2](exercise_2_extending.php)

##  🌱 Must haves - the basics => Progress
- [x] [Exercise 1](exercise_1_classes.php)
  - creating classes with properties,constructor and a getter function
  - create an object from the class 
  - display multiple properties and use the getter function to show/display info

```php
<?php

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
```
- [x] [Exercise 2](exercise_2_extending.php)
  - creating a new child class that extends upon the parent class which access the properties of his parent class
  - create a new object from the child class
  - display properties from child class using the inheritance (child class has access to properties of parent class due to public access level)
  - display an error on purpose due to object from parent class doesn't have access to properties of child class

```php
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
    public function getAlcoholPercentage():float  //float = function has to return a number with decimal
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
```
### 🌱 Must haves - digging deeper
- [Exercise 3](exercise_3_private.php)
- [Exercise 4](exercise_4_protected.php)
- [Exercise 5](exercise_5_public.php)

### 🌱 Must haves - digging deeper => Progress
- [x] [Exercise 3](exercise_3_private.php)
  - change properties to private instead of public
  - using getters to get property values of private properties
  - using setters to change property of private value
  - create a private function and use a getter to access it and display its output
  
```php
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
    public function getInfo(): void //void = function doesn't return anything
    {
        echo "This $this->name is $this->temperature and has a $this->color color. The price for a $this->name: €$this->price";
        echo "<br>";
    }
    //function getter for color value
    public function getColor():string  //string = function has to return a string(text)
    {
        return $this->color;
    }
    //function setter to change color
    public function setColor(string $color): void  //void = function doesn't return anything
    {
        $this->color = $color;
    }
    //function getter to get the name value
    public function getName():string //string = function has to return a string(text)
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
    public function getAlcoholPercentage(): float  //float = function has to return a number with decimal
    {
        return $this->alcoholPercentage;
    }
//new function to show the alcohol percentage without a return (so no getter)
    public function displayAlcoholPercentage():void  //void = function doesn't return anything
    {
        echo $this->alcoholPercentage, "<br>";
    }

    //function to write the text on screen (private so not accesable without a getter)
    private function beerInfo():void  //void = function doesn't return anything
    {
        echo "Hi i'm " .$this->getName()." and have an alcohol percentage of $this->alcoholPercentage and I have a ".$this->getColor() ." color.";
    }
    //getter for the beer info to get access to it
    public function getBeerInfo():void  //void = function doesn't return anything
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
```
- [x] [Exercise 4](exercise_4_protected.php)
- change properties to protected
- get access to properties without getters/setters, just calling the property due to protected access level => child has access to parents properties

```php
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
```

- [x] [Exercise 5](exercise_5_public.php)
  - change properties to private again
  - use getters to get access to private properties
  - create setter with logical if statement to have control over changing property
  - display results (chose to display both after if statement was checked and the else was checked)

```php
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

```
### 🌼 Nice to haves
- [Exercise 6](exercise_6_const.php)
- [Exercise 7](exercise_7_static.php)

### 🌼 Nice to haves => Progress
- -[ ] [Exercise 6](exercise_6_const.php)
- -[ ] [Exercise 7](exercise_7_static.php)
---


> Lost for a second? Have a look at [this example](#an-example)
or this one down here!
## An example

Let's say we have a list of animals from the zoo:
```js
const listOfAnimals = [
    {
        animalType : 'monkey',
        order : 'mammal',
        amount : 25
    },
    {
        animalType : 'donkey',
        order : 'mammal',
        amount : 3
    },
    {
        animalType : 'turkey',
        order : 'bird',
        amount : 500
    }
]
```

Instead of having to create this data ourselves in the format above, we can make use of OOP structures.
With OOP we would create a class `Animal`, that class will serve as some sort of "blueprint" for creating animals.
Think of it as similar to an object, but on steroids.

#### Step one: the blueprint (class)
example of the class beverage we used in these exercises.

This class has 3 important parts:
1. the public strings
   - the properties that your class will use.
2. The Constructor
    - The constructor is where your class will receive the data and apply it to the properties mentioned above
3. The functions
    - You can use functions to manipulate the data and have any result you want.


#### Step two: instantiating the object

For every object you want to create, you just need to instantiate a **new** object.

```php
<?php

$cola = new Beverage("Cola", 2, "black");

```
#### Step 3: use it!

Now that we created 3 animal objects. we can also start to use them in our code!

```php
<?php

$cola -> getInfo();
```
Don't recommend drinking a beer/Duvel every time you typed "Duvel" unless you want to see this of course!

![](https://media.giphy.com/media/FV7O4kNDztU64/giphy.gif)


## What did I learn?
1. how to create classes and objects from it
2. how to create child classes and objects from it
3. how the inheritance works/connects child and parent class
4. the difference between public,private and protected and the uses for it
5. how the construct function works
6. getters and setters and the use of them
7. strict types and how they interact with the code
8. a baseline for a new way of coding!!! 

![](https://media.giphy.com/media/xT5LMHxhOfscxPfIfm/giphy.gif)
---

### Struggles
- understand how the inheritance works
- the use for getters and setters where vague in the beginning for me => but started to understand why they are important
- why strict typing is important => now I see that in many cases this can make or break your code due to f.e. user inputs
- general struggle with a new way of coding  

---
### So you read all the way up to this point?

![](https://media.giphy.com/media/xUNd9T4D7w2Cz38qv6/giphy.gif)
---



