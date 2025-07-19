<?php
/**
 * La repo si partenza si trova su
 * https://github.com/corso-giugno-talentform/mansi-php-oop-003/blob/main/esercizi-oop.md
**/

echo "\n";
echo "# ############################################################################ \n";
echo "# ESERCIZIO 1 \n";
echo "# ############################################################################ \n";
echo "\n";
/**
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

    public static $stipendio_medio_mensile = 1500;
    public static $totPayment = 0;

    /**
     * Undocumented function
     *
     * @param [type] $name
     * @param [type] $headquarter
     * @param integer $employees
     */
    public function __construct($name, $headquarter, $employees = 0)
    {
        $this->name = $name;
        $this->headquarter = $headquarter;
        $this->employees = $employees;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHeadquarter()
    {
        return $this->headquarter;
    }

    public function getEmployees()
    {
        return $this->employees;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
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

        // $this->getCurrentCost();

        return $retVal;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getAnnualCost()
    {
        $annualCost = $this->employees * (self::$stipendio_medio_mensile * 12);
        self::$totPayment += $annualCost;

        return $annualCost;
    }

    /**
     * 
     */
    public static function getAnnualPayment()
    {
        return self::$totPayment;
    }

    public static function getAllAnnualCost()
    {
        return self::$totPayment;
    }

    public static function convertToMoneyFormat($value)
    {
        $formato = number_format($value, 2, ",", ".") 
            . " € ";

        return $formato;
    }
}

$company1 = new Company('TEST', 'TEST', 0);
print_r($company1);


echo "\n";
echo "# ############################################################################ \n";
echo "# ESERCIZIO 2 \n";
echo "# ############################################################################ \n";
echo "\n";
/**
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

// Aggiunta per poter testare il caso 0 impiegati
$company6 = new Company('Google', 'USA'); 
 
var_dump($company1);
// per le altre usiamo print_r che da un output più compatto
print_r($company2);
print_r($company3);
print_r($company4);
print_r($company5);

echo "\n";
echo "# ############################################################################ \n";
echo "# ESERCIZIO 3 \n";
echo "# ############################################################################ \n";
echo "\n";
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

echo "\n";
echo "# ############################################################################ \n";
echo "# ESERCIZIO 4 \n";
echo "# ############################################################################ \n";
echo "\n";
/**
 * Proseguendo con la classe appena creata Company, definire 1 attributo statico 
 * relativo a:
 * 
 * Attributi
 * 
 * public static $stipendio_medio_mensile = 1500;
 * E implementare un nuovo metodo che, per ogni oggetto Azienda Istanziato, calcoli la spesa annuale in euro con la formula
 * 
 * numero dipendenti * ($stipendio_medio_mensile * 12)
 * 
 * e la stampi per ogni oggetto:
 * 
 * $tot = $this->dipendenti * (self::$stipendio_medio_mensile * 12);
 * 
 * echo "Il costo annuale dell'Ufficio $nome è di $tot Euro"
 * e successivamente un metodo (non nel costruttore, attenzione) in grado di calcolare di volta in volta tutti i totali:
 * 
 * Il costo annuale dell'Ufficio $nome è di XXXXXX Euro
 * Il costo totale per l'azienda HP3 attualmente è di XXXXXX Euro (Valore che aumenta ogni volta)
 * 
**/
echo "Il costo annuale dell'Ufficio "
    . $company1->getName()
    . " è di "
    . Company::convertToMoneyFormat(
        $company1->getAnnualCost()
    )
    . "\n"
;
echo "Il costo annuale dell'Ufficio "
    . $company2->getName()
    . " è di "
    . Company::convertToMoneyFormat(
        $company2->getAnnualCost()
    )
    . "\n"
;
echo "Il costo annuale dell'Ufficio "
    . $company3->getName()
    . " è di "
    . Company::convertToMoneyFormat(
        $company3->getAnnualCost()
    )
    . "\n"
;
echo "Il costo annuale dell'Ufficio "
    . $company4->getName()
    . " è di "
    . Company::convertToMoneyFormat(
        $company4->getAnnualCost()
    )
    . "\n"
;
echo "Il costo annuale dell'Ufficio "
    . $company5->getName()
    . " è di "
    . Company::convertToMoneyFormat(
        $company5->getAnnualCost()
    )
    . "\n"
;

echo "\n";
echo "# ############################################################################ \n";
echo "# ESERCIZIO 5 \n";
echo "# ############################################################################ \n";
/**
 * Adesso vogliamo conoscere quanto gravano queste 5 sedi all’azienda HP. Creare un attributo statico:
 * 
 * Attributi
 * public static $totale = 0;
 * 
 * E di volta in volta somma in maniera ricorsiva il totale economico speso:
 * 
 * self::$total += $costo_totale_azienda
**/

echo "Questo valore viene calcolato man mano nella funzione getAnnualCost() \n";


echo "\n";
echo "# ############################################################################ \n";
echo "# ESERCIZIO 6 \n";
echo "# ############################################################################ \n";
/**
 * Dulcis in fundo, come ultimo task da eseguire, stampare nel terminale 
 * il totale assoluto di tutte le aziende 1 sola volta, con un metodo statico.
 * 
 * Utilizzare un metodo statico attraverso la classe Company (No oggetto) 
 * e richiamarlo come visto a lezione.
*/
echo "Costo annuale per l'azienda di tutte le sue sedi: "
    . Company::convertToMoneyFormat(
        Company::getAllAnnualCost()
    )
    . "\n";


