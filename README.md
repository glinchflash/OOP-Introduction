
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
- [x] [Exercise 2](exercise_2_extending.php)
  - creating a new child class that extends upon the parent class which access the properties of his parent class
  - create a new object from the child class
  - display properties from child class using the inheritance (child class has access to properties of parent class due to public access level)
  - display an error on purpose due to object from parent class doesn't have access to properties of child class

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
- - [x] [Exercise 4](exercise_4_protected.php)
  - change properties to protected
  - get access to properties without getters/setters, just calling the property due to protected access level => child has access to parents properties
- [x] [Exercise 5](exercise_5_public.php)
  - change properties to private again
  - use getters to get access to private properties
  - create setter with logical if statement to have control over changing property
  - display results (chose to display both after if statement was checked and the else was checked)
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

![](https://media.giphy.com/media/lcjWzvc9po5Og6eV4V/giphy.gif)
---



