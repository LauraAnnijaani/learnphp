<?php

function sayHello(){
    var_dump('Hello');
}

sayHello();

function sayHelloToMe($name='Nameless'){
    var_dump("Hello $name!");
}

sayHelloToMe('Laura');
sayHelloToMe('Bob');
sayHelloToMe('Mari');
sayHelloToMe();

function sayNameAndAge($name, $age){
    var_dump("Your name is $name and you are $age years old!");
}

sayNameAndAge('Laura', 18);
sayNameAndAge('Bob', 22);

function recursion($i){
    if($i<10){
        var_dump($i);
        recursion($i+1);
    }
}


recursion(0);