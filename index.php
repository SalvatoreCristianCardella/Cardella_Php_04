<?php
/*ES. 1:
Creare un Computer con Dependency Injection e Object Composition, composto da 
RAM
ROM
Scheda Video
altro*/
/*class Computer{
    public $componenti;
    //Dependency Injection
    public function __construct(Componenti ...$componenti){
        $this->componenti=$componenti;
    } 
}
class Componenti{
    public $RAM;
    public $ROM;
    public $GPU;
    public $CPU;
    public function __construct($ram,$rom,$gpu,$cpu){
        $this->RAM=$ram;
        $this->ROM=$rom;
        $this->GPU=$gpu;
        $this->CPU=$cpu;
    }
}
//object composition
$pc=new Computer(new Componenti('8gb','256gb','nvidia geforce 3070 ti','intel core i8'),
                 new Componenti('4gb','64gb','nvidia geforce 3090','intel core i7'),
                 new Componenti('6gb','256gb','nvidia geforce 4070','intel core i5'),
                 new Componenti('9gb','125gb','nvidia geforce 3000','intel core i3'));
print_r ($pc);*/




/*ES. 2:
Siamo in guerra!
Creare una classe Esercito, che sarà costituita da una Difesa e da un Attacco.
Entrambe le classi si estenderanno a loro volta e avranno i rispettivi metodi: date sfoggio alla vostra fantasia!

Esempio: 
ATTACCO: Fanteria, cavalleria, arcieri, catapulte
DIFESA: Fossato, fortezza, mura di cinta ecc..
Creare quindi degli oggetti di classe esercito che possano attaccare o difendere utilizzando i metodi delle diverse classi create 
*/
class Esercito{
    public $difesa;
    public $attacco;
    public function __construct(Difesa $difesa, Attacco $attacco){
        $this->difesa=$difesa;
        $this->attacco=$attacco;
    }
    public function Attacco(){
        $this->attacco->attack();
    }
    public function Difesa(){
        $this->difesa->defense();
    }
}

//Difesa
abstract class Difesa{
    abstract public function defense();
}
class Fossato extends Difesa{
    public function defense(){
        echo "Difesa Fossato, i nemici cadono \n";
    }
}
class Fortezza extends Difesa{
    public function defense(){
        echo "Difesa Fortezza, i nemici non fanno danno \n";
    }
}
class MuraDiCinta extends Difesa{
    public function defense(){
        echo "Difesa Mura di cinta, i nemici non passano \n";
    }
}
//Attacco
abstract class Attacco{
    abstract public function attack();
}
class Fanteria extends Attacco{
    public function attack(){
        echo "Fanteria trafigge i nemici \n";
    }
}
class Cavalleria extends Attacco{
    public function attack(){
        echo "Cavalleria attacca i nemici \n";
    }
}
class Arcieri extends Attacco{
    public function attack(){
        echo "Gli arcieri scoccano le frecce \n";
    }
}
class Catapulte extends Attacco{
    public function attack(){
        echo "Le catapulte distruggono le torri \n";
    }
}
$esercito = new Esercito(new Fossato(), new Cavalleria());
$esercito->Attacco();
$esercito->Difesa();




?>