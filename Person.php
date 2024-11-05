<?php

// DESCRIVERE UNA PERSONA
    // nome, cognome, età
// ESTENDERE IL CONCETTO DI PERSONA
// - STUDENT
    // nome, cognome, età, materia preferita
// - TEACHER
    // nome, cognome, età, stipendio   

abstract class Person{

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
    public abstract function sayHello();

}


// COME SI CREA UN TRAIT??
// il trait ha dei metodi
trait Jetpack{
    public function volo(){
        echo "Guarda mammaaaa sto volando! E non è l'erba gatta.";
    }
}


class Teacher extends Person{
    // vado a dichiarare un trait
    // come faccio? con la keyword use
    use Jetpack;

    // attributi
    public $stipendio;

    // costruttore
    public function __construct($name, $surname, $age, $money){
        parent::__construct($name, $surname, $age);

        $this-> stipendio = $money;
        
    }

    // metodi
    public function sayHello(){
        echo "Salve salvino corsista vicino, mi chiamo $this->nome, $this->cognome, ho $this->eta anni e il mio stipendio è di $this->stipendio euri. \n";
    }

}

$nicolaMenonna = new Teacher('Nicola', 'Menonna', 62, '20 mila');
// $nicolaMenonna -> sayHello();

$nicolaMenonna -> volo();


class Student extends Person{

    // ATTRIBUTI
    public $materia;

    // FUNZIONE COSTRUTTORE
    public function __construct($name, $surname, $age, $subject){
        parent::__construct($name, $surname, $age);
        
        $this->materia = $subject;
    }

    // METODI
    public function sayHello(){
        echo "Ciao a tutti, sono $this->nome $this->cognome, ho $this->eta anni e adoro un sacco, ma proprio tanto studiare $this->materia";
    }

}

$alessandro = new Student('Alessandro', 'Patruno', 23, 'Biologia');
// $alessandro -> volo();
// $alessandro -> sayHello();

// $giuseppe = new Person("Giuseppe", "Fanizzi", 28);

// $giuseppe -> print_name();
// $giuseppe -> edit_name('Walter');
// $giuseppe -> print_name();

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



    // creo la classe procione

    class Raccoon{
        use Jetpack;
    }

    $rocket = new Raccoon();
    $rocket -> volo();