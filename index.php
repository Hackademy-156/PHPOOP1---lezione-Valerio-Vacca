<?php 

// come dichiarare una classe -> keyword class + nome
// il nome della classe deve essere sempre in inglese
// il nome della classe deve essere al singolare
// il nome va con la lettera maiuscola

// DA cosa è composta una classe?
// - ATTRIBUTI -> tutte le caratteristiche che accomunano tutti gli appartenenti a quella classe
// - COSTRUTTORE -> costruisce il mio oggetto
// - METODI -> sono delle funzioni che si riferiscono ad un oggetto. O comunque si riferiscono ad una classe e vengono chiamati metodi

class Animal{
    // ATTRIBUTI o PROPRIETA'
    // deve avere una specie, un nome e un'età
    public $species;
    public $name;
    public $age;

      // volendo potrei avere un attributo o metodo statico -> la particolarità è che non operano su un oggetto, ma lavorano direttamente per conto della classe. Per lo più sono utilizzati per operazioni matematiche o funzioni di conteggio.
    // come dichiarare attributo statico?
    public static $counter = 0;


    // COSTRUTTORE
    public function __construct($specie, $nome, $eta){
        // $this dice: dell'oggetto che andrò a creare, appartenente a questa classe, prendimi l'attributo species e valorizzamelo con l'argomento reale, in posizione $specie
        $this-> species = $specie;
        $this-> name = $nome;
        $this-> age = $eta; 

        // faccio in modo che counter aumenti.. riferendomi alla classe Animal, perché è un attributo statico. Quindi non posso usare $this che si riferisce all'oggetto che andrò a creare
        // Animal::$counter++;
        self::$counter++;
        // :: scope resolution operator
    }
    
    // METODI o COMPORTAMENTI

    public function info(){
        
        echo "L'animale scelto è un $this->species, il suo nome è $this->name e ha $this->age anni \n";

    }

}

// echo Animal::$counter;

// COME SI CREA UN'ISTANZA DI CLASSE ANIMAL
$marley = new Animal("Coniglio testa di Leone", "Marley", 7);

// $marley -> info();
    // print_r($marley);

$melo = new Animal("Geco Leopardino", "Melo", 4);
// $melo -> info();

    // print_r($melo);


// echo Animal::$counter;


// cos'è l'ereditarietà?
// Indica la possibilità per una classe di ereditare da un'altra, tutti gli attributi e tutti i metodi, per poi andare a ESTENDERE il concetto della classe base e specializzarlo.

// abbiamo due tipi di ereditarietà -> singola e multipla
// php sfrutta l'ereditarietà singola -> quando una sotto-classe deriva solo da un'unica classe padre
// multipla -> ci permette di comporre classi, derivanti da più classi padre

// EREDITARIETA' -> estendiamo il concetto di ANIMAL
// PET -> padrone e città in cui vive
class Pet extends Animal{
    // ATTRIBUTI
    public $owner;
    public $city;

    // COSTRUTTORE
    // anche se gli attributi vengono ereditati dal padre, devo inserire i loro parametri formali nel costruttore e utilizzarli.
    public function __construct($specie, $nome, $eta, $proprietario, $citta){
        // vai nella construct di tuo padre Animal e prendi da lì i valori di questi attributi.
        // ho specificato già su come devono esser valorizzati
        parent::__construct($specie, $nome, $eta);

        $this-> owner = $proprietario;
        $this-> city = $citta;
    }


    // METODI
    public function info(){
        echo "Ciao, io sono  $this->owner, e lui si chiama $this->name, ha $this->age e viviamo assieme a $this->city";
    }

}


// creiamoci un'istanza di classe pet che estende animal
$poly = new Pet('Pappagallo', 'Poly', 2, 'Valerio', 'Bari');
// $poly -> sayHello();

// print_r($poly);
// echo Animal::$counter;

// $marley -> info();

// $poly -> info();

// POLIMORFISMO


// WILDLIFE -> habitat e cibo preferito
class Wildlife extends Animal{

    // ATTRIBUTI
    public $habitat;
    public $favourite_food;

    // COSTRUTTORE
    public function __construct($specie, $nome, $eta, $habitat, $cibo_preferito){
        
        parent::__construct($specie, $nome, $eta);

        $this-> habitat = $habitat;
        $this-> favourite_food = $cibo_preferito;

    }


    // METODI

    public function research(){

        echo "Stiamo osservando un esemplare di $this->species, lo abbiamo nominato $this->name ed è un individuo di $this->age anni. Il suo habitat è $this->habitat e si nutre principalmente di $this->favourite_food \n";

    }

}

$charizard = new Wildlife("Drago di fuoco", "Charizard", 10, "Vulcano di Kanto", "corsisti Hackademy" );

$charizard->research();
