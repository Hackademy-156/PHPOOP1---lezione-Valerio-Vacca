<?php

// DESCRIVERE UNA PERSONA
    // nome, cognome, età
// ESTENDERE IL CONCETTO DI PERSONA
// - STUDENT
    // nome, cognome, età, materia preferita
// - TEACHER
    // nome, cognome, età, stipendio   

class Person{

    // attributi
    protected $nome;
    public $cognome;
    public $eta;

    // attributo statico
    public static $counter = 0;

    // costruttore

    public function __construct($name, $surname, $age){
        
        $this-> nome = $name;
        $this-> cognome = $surname;
        $this-> eta = $age;

        self::$counter++;

    }

    // metodi
    public function sayHello(){
        echo "Ciao, sono $this->nome $this->cognome ed ho $this->eta anni \n";    
    }

    // metodo per visualizzare un dato -> funzione Getter
    public function print_name(){
        echo "$this->nome \n";
    }

    // metodo per cambiare un dato -> funzione Setter
    public function edit_name($nuovo_nome){
        $this->nome = $nuovo_nome;
    }


}

$giuseppe = new Person("Giuseppe", "Fanizzi", 28);

$giuseppe -> print_name();
$giuseppe -> edit_name('Walter');
$giuseppe -> print_name();

// $giuseppe -> nome  = "Arianna";

// echo $giuseppe -> nome;

// $giuseppe -> sayHello();

// echo Person::$counter;


// ACCESS MODIFIERS
//  - PUBLIC -> L’attributo è accessibile in Lettura e in Scrittura ovunque nel nostro algoritmo.
    // L’attributo viene ereditato dalle classi figlie.

    // data hiding
//  - PROTECTED ->  L’attriubuto è accessibile in Lettura e in Scrittura solo dall’interno della classe.
            //   L’attributo viene ereditato dalle classi figlie.
//  - PRIVATE -> Lo stesso comportamento di protected.
    // L’attributo non viene ereditato da eventuali classi figlie.