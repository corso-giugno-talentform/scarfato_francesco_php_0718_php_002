<?php

echo "\n";
echo "# ############################################################################ \n";
echo "# ESERCIZIO 1 \n";
echo "# ############################################################################ \n";
echo "\n";

# ############################################################################
# Esercizio 1
# ############################################################################

/**
 * Esercizio 1
 * Creare una classe Azienda (Company) che abbia gli attributi public:
 * 
 * Nome: Nome della sede;
 * Sede: Stato in cui è ubicata la sede;
 * Totale Dipendenti (default=0): Numero di dipendenti assunti in quella sede.
 * Definire la funzione __construct() come visto a lezione per prendere in input 
 * i 3 attributi.
 * 
**/

class Company {

    public $name;
    public $headquarter;
    public $employees;

    public function __construct($name, $headquarter, $employees = 0)
    {
        $this->name = $name;
        $this->headquarter = $headquarter;
        $this->employees = $employees;
    }

    public function getInfo() {
        $retVal = "L'ufficio " 
            . $this->name 
            . " con sede in "
            . $this->headquarter
        ;
        
        if ($this->employees > 0) {
            $retVal .= " ha ben "
                . $this->employees
                . " dipendenti. \n";
        } else {
            $retVal .= " NON ha dipendenti. \n";
        }

        return $retVal;
    }
}
$company1 = new Company('TEST', 'TEST', 0);
print_r($company1);

echo "\n";
echo "# ############################################################################ \n";
echo "# ESERCIZIO 2 \n";
echo "# ############################################################################ \n";
echo "\n";

# ############################################################################
# Esercizio 2
# ############################################################################

/**
 * Esercizio 2
 * Una volta definita la classe, istanziare 5 Sedi con i rispettivi dati 
 * e controllare che siano stati correttamente memorizzati con un var_dump();
 * 
 * Istanzio i 5 Oggetti
 * $company1 = new Company('Apple', 'USA', 3);
 * $company2 = new Company('Barilla', 'ITA', 3);
 * $company3 = new Company('Nintendo', 'JAP', 5);
 * $company4 = new Company('Nokia', 'FIN', 10);
 * $company5 = new Company('Xioami', 'CHI', 3);
 * 
 * var_dump($company1); //ecc
**/

$company1 = new Company('Apple', 'USA', 3);
$company2 = new Company('Barilla', 'ITA', 3);
$company3 = new Company('Nintendo', 'JAP', 5);
$company4 = new Company('Nokia', 'FIN', 10);
$company5 = new Company('Xioami', 'CHI', 3);
$company6 = new Company('Google', 'USA');
 
var_dump($company1);

echo "\n";
echo "# ############################################################################ \n";
echo "# ESERCIZIO 3 \n";
echo "# ############################################################################ \n";
echo "\n";

# ############################################################################
# Esercizio 3
# ############################################################################
/**
 * Utilizzando la classe Azienda appena creata, implementare un metodo in grado 
 * di stampare via terminale:
 * 
 * L'ufficio $this->nome con sede in $this->sede ha ben $this->dipendenti dipendenti.
 * 
 * Se il $this→dipendenti è > di 0.
 * Altrimenti se i dipendenti sono 0 (valore di default) stampare:
 * 
 * L’ufficio $this->nome con sede in $this->sede non ha dipendenti
**/

echo $company1->getInfo();
echo $company2->getInfo();
echo $company3->getInfo();
echo $company4->getInfo();
echo $company5->getInfo();
echo $company6->getInfo();
