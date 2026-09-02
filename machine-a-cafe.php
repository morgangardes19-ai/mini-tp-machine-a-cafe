<?php
class MachineACafe
{
    private string $marque;
    private bool $cafe;
    private bool $estAllumé;
    private int $eau;

    public function __construct(string $marque)
    {
        $this->marque = $marque;
        $this->estAllumé = false;
        $this->cafe = false;
        $this->eau = 0;
    }

    public function onOff()
    {
        if ($this->estAllumé) {
            echo "La machine {$this->marque} s'éteint";
            $this->estAllumé = false;
        } else {
            echo "La machine {$this->marque} s'allume";
            $this->estAllumé = true;
        }
    }

        public function remplirRecipiantEau(){
        if ($this->eau === 0) {
            echo "Rajoutez de l'eau dans le récipiant.";
            return;
        } else {
            $this->eau === 500;
        }
    }

    public function mettreUneDosette()
    {
        if (!$this->cafe) {
            echo "La machine {$this->marque} n'a pas de dosette. On en ajoute une";
            $this->cafe = true;
        } else {
            echo "Il y a déjà une dosette dans la machine.";
        }
    }

    public function faireDuCafe()
    {
        if (!$this->estAllumé) {
            echo "La machine est éteinte veuillez l'allumer.";
            return;
        }

        // if ($this->eau >= 20) {
            
        // }

        if (!$this->cafe) {
            echo "Il n'y a pas de café, il faut en rajouter.";
            return;
        }
        $this->cafe = false;
        echo "Le café est prêt à être récupéré.";
    }
}


$machine = new MachineACafe("senseo");
var_dump($machine);

// $machine->onOff();
// var_dump($machine);

$machine->remplirRecipiantEau();
var_dump($machine);

// $machine->mettreUneDosette();
// var_dump($machine);

// $machine->faireDuCafe();
// var_dump($machine);
