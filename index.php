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
 * Utilizzando un approccio funzionale (piccole funzioni che risolvono 
 * un piccolo problema), riscrivere il programma fatto in precedenza 
 * che stampi in console tutti i numeri da 1 a 30.
 * 
 * - Se il numero e’ multiplo di 3, non deve stampare il numero ma “PHP”;
 * - Se multiplo di 5 deve stampare “JAVASCRIPT”;
 * - Se multiplo di 3 e 5 (15) deve stampare “Aulab”;
**/

function multipleOf($number, $base) {
    return ($number % $base === 0)
        ? true
        : false
    ;
}

$result = [];
for ($i = 1; $i < 31; $i++) {
    if (multipleOf ($i , 3) && multipleOf($i, 5)) {
        $result[] = 'Aulab';
    } else if (multipleOf ($i , 3)) {
        $result[] = 'PHP';
    } else if (multipleOf ($i , 5)) {
        $result[] = 'JAVASCRIPT';
    } else {
        $result[] = $i;
    }
}
echo implode(", ", $result ) . "\n";

echo "\n";
echo "# ############################################################################ \n";
echo "# ESERCIZIO 2 \n";
echo "# ############################################################################ \n";
echo "\n";

# ############################################################################
# Esercizio 2
# ############################################################################
/**
 * Dato il seguente array associativo:
 * 
 * ```php
 * $persons = [
 *   ['name' => 'Marco',   'age' => 18, ],
 *   ['name' => 'Vanessa', 'age' => 12, ],
 *   ['name' => 'Jack',    'age' => 34, ],
 *   ['name' => 'Maria',   'age' => 55, ],
 * ];
 * ```
 * 
 * Scrivere un programma utilizzando le funzioni in grado di controllare l’ età  di ogni persona e stampare a video se:
 * 
 * - Maggiore o uguale di 18: "$nome_persona può votare"
 * - Minore di 18: "$nome_persona non può votare"
 * 
**/
function isAdult($age) {
    return $age >= 18;
}

$persons = [
    ['name' => 'Marco',   'age' => 18, ],
    ['name' => 'Vanessa', 'age' => 12, ],
    ['name' => 'Jack',    'age' => 34, ],
    ['name' => 'Maria',   'age' => 55, ],
];
foreach($persons as $person) {
    $name = $person['name'];
    $age  = $person['age'];
    if (isAdult($age)) {
        echo $name . " può votare \n";
    } else {
        echo $name . " non può votare \n";

    }
}

echo "\n";
echo "# ############################################################################ \n";
echo "# ESERCIZIO 3 \n";
echo "# ############################################################################ \n";
echo "\n";

# ############################################################################
# Esercizio 3
# ############################################################################
/**
 * Scrivere un programma funzionale che, dato un numero in input ($max), stampi a video:
 * 
 * - PRIMA tutti i numeri Dispari
 * - DOPO tutti i numeri PARI
 * 
 * ```php
 * //Esempio max = 10
 * 1,3,5,7,9
 * 0,2,4,6,8,10
 * ```
**/

$max = 10;
$even = [];
$odd = [];

for ($i = 1; $i <= $max; $i++) {
    if (multipleOf($i, 2)) {
        $even[] = $i;
    } else {
        $odd[] = $i;
    }
}

echo implode(", ", $odd) . "\n";
echo implode(", ", $even) . "\n";
