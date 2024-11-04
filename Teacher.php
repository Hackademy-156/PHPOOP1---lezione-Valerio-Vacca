<?php
// - TEACHER
// nome, cognome, età, stipendio 

include "Person.php";

class Teacher extends Person{

    // attributi
    public $stipendio;

    // costruttore
    public function __construct($name, $surname, $age, $money){

        parent::__construct($name, $surname, $age);

        $this-> stipendio = $money;

    }

    //metodi

    public function teacher_sayHello(){

        echo "Salve, sono il docente $this->nome $this->cognome, ho $this->eta anni e guadagno circa sedicenti $this->stipendio euri in gettoni d'oro";

    }

}

$valerio = new Teacher('Valerio', 'Vacca', 33, 150,000);

$valerio -> teacher_sayHello();
$valerio -> sayHello();